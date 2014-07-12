#/bin/bash -e

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

docker run -d --rm --name mysql -v "$DIR/development/db:/var/lib/mysql" cloyne/mysql-dev
docker run -d --rm --name blog --link mysql:mysql -v "$DIR/development/etc:/etc/wordpress" -v "$DIR/plugins:/wordpress/wp-content/plugins" -v "$DIR/themes:/wordpress/wp-content/themes" -p 80:80 cloyne/blog
