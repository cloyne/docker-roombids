Cloyne blog
===========

http://cloyne.org/

Development
-----------

For development, you have to install [Docker](https://docs.docker.com/).

On Mac OS X you have to use boot2docker with [alternative ISO image](https://medium.com/boot2docker-lightweight-linux-for-docker/boot2docker-together-with-virtualbox-guest-additions-da1e3ab2465c). In short, you:
* run `boot2docker down`
* download [boot2docker.iso](http://static.dockerfiles.io/boot2docker-v1.1.1-virtualbox-guest-additions-v4.3.12.iso) and save it as `~/.boot2docker/boot2docker.iso`
* run `VBoxManage sharedfolder add boot2docker-vm -name home -hostpath /Users
* run `boot2docker up`

Download Docker images:
* `docker pull cloyne/mysql-dev`
* `docker pull cloyne/blog`

Run them from a clone of this repository using `./development.sh` script. This will create two Docker containers, one for MySQL database, another for Cloyne blog. You should see them running through `docker ps`. Wait for around 10 seconds for all internal container processes to start correctly and open IP as returned by `boot2docker ip`, or open `127.0.0.1` on Linux, in your browser and you should see Wordpress installation wizard. Initially database is empty and you have to configure your local version of Cloyne blog. Probably you should configure it similar to deployed Cloyne blog is so that you can test things.

Script runs Cloyne blog in a way that it maps `plugins` and `themes` directories directly into the container. This means you can just work directly on them and just reload in the browser. Once you are satisfied with your changes, you commit and push to GitHub.

Plugins
-------

Plugins are stored in `plugins` directory. You can add plugins you want there. But the best way is that you add plugin through as a [git submodule](http://git-scm.com/book/en/Git-Tools-Submodules). For example:

```
git submodule add https://github.com/benhuson/wp-mailfrom.git plugins/wp-mailfrom-ii
```

Theme
-----

Most changes you will do by modifying theme. Simply modify necessary PHP or CSS files and this is it. Have in mind that sometimes it is better to create a placeholder in the template which can later on be filled through Wordpress web admin interface instead of hard-coding the code change you want.
