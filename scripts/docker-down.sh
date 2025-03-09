#!/bin/bash
container_name_prefix=$(basename "$PWD")

docker container stop "${container_name_prefix}-adminer"
docker container rm "${container_name_prefix}-adminer"
docker container stop "${container_name_prefix}-mailhog"
docker container rm "${container_name_prefix}-mailhog"
