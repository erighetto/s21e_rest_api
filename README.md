# s21e_rest_api
REST api for e21s project

Installazione:

    git clone https://github.com/erighetto/s21e_rest_api.git  
    cd s21e  
    cp local/docker-compose.yml.dist local/docker-compose.yml  

Modificare all'interno di **docker-compose.yml** i parametri necessari al funzionamento di Docker sulla tua macchina.


Sucessivamente lancia:

    cd local
    docker-compose up

In un'altra shell poi esegui:
    
    docker exec -it local_symfony-app_1 bash
    composer install --prefer-dist
    php bin/console doctrine:schema:update --force --em=fos
    php bin/console doctrine:fixtures:load --em=fos --no-interaction
    
    