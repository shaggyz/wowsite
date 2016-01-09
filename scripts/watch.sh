#!/usr/bin/env bash

INPUT_FILE="public/js/src/main.js"
OUTPUT_FILE="public/js/bundle.js"
OUTPUT_MAP="public/js/bundle.map.json"

watchify $INPUT_FILE -o $OUTPUT_FILE -d -p [minifyify --map bundle.map.on --output $OUTPUT_MAP] -v
