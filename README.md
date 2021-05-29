
# s21e_rest_api
REST api for [e21s](https://github.com/erighetto/s21e) project

Installazione:

    git clone https://github.com/erighetto/s21e_rest_api.git  
    cd s21e_rest_api
    cp local/docker-compose.yml.dist local/docker-compose.yml  

Modificare all'interno di **docker-compose.yml** i parametri necessari al funzionamento di Docker sulla tua macchina.


Sucessivamente lancia:

    cd local
    make up

In un'altra shell poi esegui:
    
    make shell
    composer install --prefer-dist
    bin/console doctrine:schema:create
    bin/console app:db:truncatetables
    bin/console doctrine:database:import dump.sql
    bin/console app:db:cleanup
    
