#!/bin/bash
set -e

if ! docker network ls | grep -q "public"; then
  echo ">>> Tworzenie sieci 'public'..."
  docker network create public
else
  echo ">>> Sieć 'public' już istnieje."
fi

echo ">>> Uruchamianie poco..."
docker compose -f ./poco/run.yml up -d > poco.log 2>&1

echo ">>> Uruchamianie porcon..."
docker compose -f ./porcon/run.yml up -d > porcon.log 2>&1

echo ">>> Uruchamianie qoco..."
docker compose -f ./qoco/run.yml up -d > qoco.log 2>&1

echo ">>> 🚀"
