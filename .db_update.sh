#!/usr/bin/env bash
echo "Truncate Tables"
php web/bin/console app:db:truncatetables
echo "Import DB"
php web/bin/console doctrine:database:import dumps/dump.sql
echo "Clean up DB"
php web/bin/console app:db:cleanup