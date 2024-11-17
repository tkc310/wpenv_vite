import { defineConfig, UserConfig } from 'vite';
import FullReload from 'vite-plugin-full-reload';
import tsconfigPaths from 'vite-tsconfig-paths';
import { resolve, relative, extname } from 'path';
import { globSync } from 'glob';
import { fileURLToPath } from 'node:url';

const root = resolve(__dirname, 'src');

// @refs: https://vitejs.dev/config/
const config = (): UserConfig => ({
  root,
  base: './',
  server: {
    host: true,
    cors: true,
    strictPort: true,
    port: 3000,
    hmr: {
      host: 'localhost',
    },
  },
  preview: {
    host: true,
    port: 3000,
  },
  build: {
    outDir: './dist',
    assetsDir: './src',
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: {
        'styles/main.css': 'src/styles/main.scss',
        // @see: https://rollupjs.org/configuration-options/#input
        ...Object.fromEntries(
          globSync(['src/scripts/**/*.ts']).map((file) => [
            relative(
              'src/scripts',
              file.slice(0, file.length - extname(file).length)
            ),
            fileURLToPath(new URL(file, import.meta.url)),
          ])
        ),
      },
      output: {
        entryFileNames: 'scripts/[name].js',
        chunkFileNames: 'scripts/chunk.[name].js',
        assetFileNames: '[name].[ext]',
      },
    },
  },
  plugins: [
    FullReload(['./wordpress/**/*.php'], { root: __dirname }),
    tsconfigPaths(),
  ],
});

export default defineConfig(() => config());
