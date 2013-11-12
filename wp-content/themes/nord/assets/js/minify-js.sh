#! /bin/bash

cat bootstrap.js skip-link-focus-fix.js function.js subscribe.js  | uglifyjs -o minified.js
