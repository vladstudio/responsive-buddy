#!/bin/bash
cd "$(dirname "$0")"
version=$(grep -o '"version": "[^"]*"' extension-src/manifest.json | cut -d'"' -f4)
mkdir -p extension-dist/chrome
cd extension-src
zip -rq0 "../extension-dist/chrome/Responsive Buddy-${version}.zip" ./*
