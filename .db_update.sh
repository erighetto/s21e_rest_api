#!/usr/bin/env bash
echo "Truncate Tables"
/opt/plesk/php/7.2/bin/php web/bin/console app:db:truncatetables
echo "Import DB"
/opt/plesk/php/7.2/bin/php web/bin/console doctrine:database:import dumps/dump.sql
echo "Clean up DB"
/opt/plesk/php/7.2/bin/php web/bin/console app:db:cleanup