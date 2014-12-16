#/bin/bash -e

mkdir -p /srv/var/log/blog

# TODO: We should not trust whole Docker IP range

docker run -d --restart=always --name blog --hostname blog -e SET_REAL_IP_FROM=172.17.0.0/16 -e ADMINADDR=root@cloyne.org -e REMOTES=mail.cloyne.net -v /srv/var/hosts:/etc/hosts:ro -v /srv/var/log/blog:/var/log/nginx -v /srv/blog/etc:/etc/wordpress -v /srv/blog/uploads:/wordpress/wp-content/uploads cloyne/blog
