#/bin/bash -e

mkdir -p /srv/var/log/blog

# TODO: We should not trust whole Docker IP range.

docker run --detach=true --restart=always --name blog --hostname blog \
 --env VIRTUAL_HOST=cloyne.org --env VIRTUAL_ALIAS=/ \
 --env SET_REAL_IP_FROM=172.17.0.0/16 --env ADMINADDR=root@cloyne.org --env REMOTES=mail.cloyne.net \
 --volume /srv/var/hosts:/etc/hosts:ro --volume /srv/var/log/blog:/var/log/nginx \
 --volume /srv/blog/etc:/etc/wordpress --volume /srv/blog/uploads:/wordpress/wp-content/uploads \
 cloyne/blog
