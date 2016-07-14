#!/usr/bin/env bash
set -u
set -e
set -o noclobber

sudo docker run -itd -p 8080:80 -v $(readlink -f .):/var/www/html genzouw/file-uploader
