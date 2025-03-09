#!/bin/bash
contaner_name_prefix=$(basename "$PWD")

network=$(docker container ps --format "{{.Networks}}" | head -n 1)
network_id=${network%_default}  # Remove '_default' from network

container=$(docker container ps --filter "name=${network_id}-mysql-1" --format "{{.ID}}")

sh ./scripts/adminer.sh "$network" "$container" "$contaner_name_prefix"
sh ./scripts/mailhog.sh "$network" "$contaner_name_prefix"
