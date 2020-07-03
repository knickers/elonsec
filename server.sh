#!/bin/bash
set -e

docker run -it --rm \
	-w /app \
	-v "$(pwd)":/app \
	-p 8000:80 \
	php \
	php -S 0.0.0.0:80
