#!/usr/bin/env bash

export PATH="/opt/plesk/php/7.3/bin:$PATH"

HOME="/var/www/vhosts/api.supergabry.it/httpdocs/"

echo "Truncate Tables"
php ${HOME}web/bin/console app:db:truncatetables

echo "Import DB"
php ${HOME}web/bin/console doctrine:database:import ${HOME}dumps/dump.sql

echo "Clean up DB"
php ${HOME}web/bin/console app:db:cleanup