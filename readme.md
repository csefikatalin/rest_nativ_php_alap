# Restfull alklamazás natív PHP és JS nyelven

Ez egy minta sablon. A backend PHP nyelven készült, a frontend JS. 

## Backend 

Csak a GET kérés készült el egyelőre. 

### Adatbázis

#### Táblák

**items**
id: autoincrement
nev: string
pont: integer

### Slim 

 A Slim egy PHP micro keretrendszer (framework), amelyet webalkalmazások fejlesztésére használnak. A Slim keretrendszer célja, hogy minimalista megközelítést biztosítson a PHP-alapú webalkalmazások építéséhez, amely lehetővé teszi a fejlesztők számára, hogy gyorsan és hatékonyan hozzanak létre RESTful API-kat és más típusú webes alkalmazásokat. [Slim](https://www.slimframework.com/docs/v3/start/installation.html).


 Telepítsük a Slim csomagot a backend alkalmazásunk gyökérkönyvtárába. 

    composer require slim/slim:3.*

Létrejön egy vendor mappa, illetve a composer.json, composer.lock configurációs fájlok. (ezek tartalmazzák a függőségeket) 

Githubról való clonozás esetén a vendor mappát újra le kell tölteni: composer install

### Mapparendszer

API mappában hoztam létre a backendhez szükséges php fájlokat. 

- **index.php** - ez a backend belépési pontja, itt vannak definiálva az **api végpontok**
- **database.php** - az **adatbázis kapcsolat** beállítása
- **Item.php** - az adatbázis **items táblájának** elérése, modell fájl
- **ItemController.php** - a **http kérésekhez (GET, POST, PUT, DELETE) tartozó függvények** megírása történik a controller fájlban. Az index.php-ban megadott végpontok ezeket a függvényeket hívják. 
- **corsMiddleware.php** - itt állítom be a cors tulajdonságokat, pl.  mely URL-ekről érhetők el a kérések. 


## Frontend

Az asszinkron hívásokhoz axios-t használtam. Ehhez az index.js fájlban be kell linkelni az axios függvénykönyvtárt. [axios](https://axios-http.com/docs/intro)

- **main.js** - Itt példányosítom a DataService osztályt és a megjelenit callback függvény fogja megkapni végül az adatokat a szervertől. 
- **DataService.js** - DataService osztály tagfüggvényei hívják a végpontokat. 






