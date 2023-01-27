#!/bin/bash
# requires: jq (brew install jq)

#----
folder=$(dirname "$0")
cd "${folder}"

name=$(cat extension-src/manifest-chrome.json | jq -r '.name')
version=$(cat extension-src/manifest-chrome.json | jq -r '.version')

# chrome
rm -rf temp/*
cp -r extension-src/ temp/
mv "temp/manifest-chrome.json" "temp/manifest.json"
cd temp
zip -rq0 "../extension-dist/chrome/${name}-${version}.zip" ./*
cd ..
/Applications/Google\ Chrome.app/Contents/MacOS/Google\ Chrome --pack-extension="${folder}/temp" --pack-extension-key="${folder}/responsive-buddy.pem"
mv "temp.crx" "extension-dist/chrome/${name}-${version}.crx"


# Files remain in temp folder - so that I can "load unpacked" in Chrome.