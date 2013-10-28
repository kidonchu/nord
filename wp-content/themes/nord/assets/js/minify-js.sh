#! /bin/bash

cat bootstrap.js skip-link-focus-fix.js subscribe.js  | uglifyjs -o minified.js
