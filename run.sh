#!/bin/bash
set -e

if ! docker network ls | grep -q "public"; then
  echo ">>> Tworzenie sieci 'public'..."
  docker network create public
else
  echo ">>> Sieć 'public' już istnieje."
fi

echo ">>> Uruchamianie poco..."
docker compose -f ./poco/run.yml up -d

echo ">>> Uruchamianie porcon..."
docker compose -f ./porcon/run.yml up -d

echo ">>> Uruchamianie qoco..."
docker compose -f ./qoco/run.yml up -d

echo ">>> Wszystko odpalone 🚀"
