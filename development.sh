#!/bin/bash -e

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

docker run -d --name mysql -v "$DIR/development/db:/var/lib/mysql" -v "$DIR/development/log/mysql:/var/log/mysql" cloyne/mysql-dev
docker run -d --name blog --link mysql:mysql -v "$DIR/development/etc/wordpress:/etc/wordpress" -v "$DIR/development/etc/service/nginx/run.initialization:/etc/service/nginx/run.initialization" -v "$DIR/plugins:/wordpress/wp-content/plugins" -v "$DIR/themes:/wordpress/wp-content/themes" -v "$DIR/development/log/nginx:/var/log/nginx" -p 80:80 cloyne/blog
