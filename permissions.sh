#!/bin/sh
#fix to Lang files
chown luciano:www-data -R resources/lang/
chmod -R ug+w resources/lang/
chmod -R o-w resources/lang/

find resources/lang/ -type f -exec chmod ugo-x {} \;
find resources/lang/ -type d -exec chmod ugo+x {} \;

find resources/lang/ -type f -exec chmod g-s {} \;
find resources/lang/ -type d -exec chmod g+s {} \;

setfacl -dR -m u::rwx resources/lang/
setfacl -dR -m g::rwx resources/lang/


#fix to Debugbar files
chown luciano:www-data -R storage/debugbar/
chmod -R ug+w storage/debugbar/
chmod -R o-w storage/debugbar/

find storage/debugbar/ -type f -exec chmod ugo-x {} \;
find storage/debugbar/ -type d -exec chmod ugo+x {} \;

find storage/debugbar/ -type f -exec chmod g-s {} \;
find storage/debugbar/ -type d -exec chmod g+s {} \;

setfacl -dR -m u::rwx storage/debugbar/
setfacl -dR -m g::rwx storage/debugbar/

#fix to Monolog files
chown luciano:www-data -R storage/logs/
chmod -R ug+w storage/logs/
chmod -R o-w storage/logs/

find storage/logs/ -type f -exec chmod ugo-x {} \;
find storage/logs/ -type d -exec chmod ugo+x {} \;

find storage/logs/ -type f -exec chmod g-s {} \;
find storage/logs/ -type d -exec chmod g+s {} \;

setfacl -dR -m u::rwx storage/logs/
setfacl -dR -m g::rwx storage/logs/

#fix to Bootstrap cache files
chgrp www-data -R bootstrap/cache/
chmod -R ug+w bootstrap/cache/
chmod -R o-w bootstrap/cache/

find bootstrap/cache/ -type f -exec chmod ugo-x {} \;
find bootstrap/cache/ -type d -exec chmod ugo+x {} \;

find bootstrap/cache/ -type f -exec chmod g-s {} \;
find bootstrap/cache/ -type d -exec chmod g+s {} \;

setfacl -dR -m u::rwx bootstrap/cache/
setfacl -dR -m g::rwx bootstrap/cache/

#fix to View cache files
chgrp www-data -R storage/framework/views/
chmod -R ug+w storage/framework/views/
chmod -R o-w storage/framework/views/

find storage/framework/views/ -type f -exec chmod ugo-x {} \;
find storage/framework/views/ -type d -exec chmod ugo+x {} \;

find storage/framework/views/ -type f -exec chmod g-s {} \;
find storage/framework/views/ -type d -exec chmod g+s {} \;

setfacl -dR -m u::rwx storage/framework/views/
setfacl -dR -m g::rwx storage/framework/views/

#fix to Sessions files
chgrp www-data -R storage/framework/sessions/
chmod -R ug+w storage/framework/sessions/
chmod -R o-w storage/framework/sessions/

find storage/framework/sessions/ -type f -exec chmod ugo-x {} \;
find storage/framework/sessions/ -type d -exec chmod ugo+x {} \;

find storage/framework/sessions/ -type f -exec chmod g-s {} \;
find storage/framework/sessions/ -type d -exec chmod g+s {} \;

setfacl -dR -m u::rwx storage/framework/sessions/
setfacl -dR -m g::rwx storage/framework/sessions/

#fix to Cache files
chgrp www-data -R storage/framework/cache/
chmod -R ug+w storage/framework/cache/
chmod -R o-w storage/framework/cache/

find storage/framework/cache/ -type f -exec chmod ugo-x {} \;
find storage/framework/cache/ -type d -exec chmod ugo+x {} \;

find storage/framework/cache/ -type f -exec chmod g-s {} \;
find storage/framework/cache/ -type d -exec chmod g+s {} \;

setfacl -dR -m u::rwx storage/framework/cache/
setfacl -dR -m g::rwx storage/framework/cache/

#fix to Doctrine proxy files
chgrp www-data -R storage/proxies/
chmod -R ug+w storage/proxies/
chmod -R o-w storage/proxies/

find storage/proxies/ -type f -exec chmod ugo-x {} \;
find storage/proxies/ -type d -exec chmod ugo+x {} \;

find storage/proxies/ -type f -exec chmod g-s {} \;
find storage/proxies/ -type d -exec chmod g+s {} \;

setfacl -dR -m u::rwx storage/proxies/
setfacl -dR -m g::rwx storage/proxies/

#fix to unversioned files
chmod -R ugo+w resources/views/vendor/erpnetWidgetResource/unversioned/