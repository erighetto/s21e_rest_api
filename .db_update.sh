#!/usr/bin/env bash
echo "Truncate Tables"
php httpdocs/bin/console app:db:truncatetables
echo "Import DB"
php httpdocs/bin/console doctrine:database:import dumps/dump.sql
echo "Clean up DB"
php httpdocs/bin/console app:db:cleanup