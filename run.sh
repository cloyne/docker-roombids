#/bin/bash -e

mkdir -p /srv/var/log/blog

# TODO: We should not trust whole Docker IP range

docker run -d --name blog -h blog.blog.server2.docker -e SET_REAL_IP_FROM=172.17.0.0/16 -e ADMINADDR=root@cloyne.net -e REMOTES=mail.cloyne.net -v /srv/var/log/blog:/var/log/nginx -v /srv/blog/etc:/etc/wordpress -v /srv/blog/uploads:/wordpress/wp-content/uploads cloyne/blog
