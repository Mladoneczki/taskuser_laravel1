# taskuser_laravel1
mappa létrehozás
git repo
composer create-project laravel/laravel projektnév 
 xampp-ben első két start és második admin
 itt hozzuk létre az adatbázist

app:
    http/controller
    Models
database:
    összes almappa!
    factories- tesztelés
    migrations- táblák részletezései
    seeders

resources:
    views:
        bladek- kis építő elemek

routes!

vendor- git ignored - composer install, ha gitről clonozol 

.env : alapértelmezett beállítások - 22.sortól :
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mytesztuser
DB_USERNAME=root
DB_PASSWORD=



kövi lépés:
cd projektnév
 php artisan serve  -szerver indítás
 php artisan key:generate


 migration:
            create_users_table
            valtozok neve előtt mindig $
            -> olyan mint a classoknál a . azzal tudom elérni a metódusait
            statikus hivatkozás ::
            kulcs érték párok beállítása =>


--Na itt veszettettem el a figyelmem, a fonalat, és az életkedvem :/

tábla létrehozás:

userből kimásoltunk ezt azt.. létrehoztunk szintén a modellben egy task.php-t és a leendő tábláink "fejléceit" itt adjuk meg (asszem) majd a migrationban csinálunk valamit (itt angol neveket használunk) $table->tipus("elnevezés")-itt adható meg default érték vagy hogy valami uniq vagy lehet az értéke null. 
Külsőkulcs: foreignID("user_id")->preferences('id')->on('users), hogy hozom létre az eredeti helyén hogy hívják és melyik táblában keressem(???)


terminal: php artisan migrate ---felkerül a php my adminba
tervező nézetben látszik hogy összekötötte e