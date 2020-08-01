#!/usr/bin/env bash

HOME="/var/www/vhosts/api.supergabry.it/httpdocs/"

echo "Truncate Tables"
/opt/plesk/php/7.3/bin/php ${HOME}web/bin/console app:db:truncatetables

echo "Import DB"
/opt/plesk/php/7.3/bin/php ${HOME}web/bin/console doctrine:database:import ${HOME}dumps/dump.sql

echo "Clean up DB"
/opt/plesk/php/7.3/bin/php ${HOME}web/bin/console app:db:cleanup