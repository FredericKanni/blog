<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//#0
Route::get('/', function () {
    return view('welcome');
});


//#1 on test les return
// Route::get('/contact', function () {
//     return 'contactz nous !';
// });
// Route::get('/a-propos', function () {
//     return 'a-propos';
// });

//#2 on test les view on creer ds ressources/views la vus contact.blade.php et apropos.blade.php
// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('/a-propos', function () {
//     return view('a-propos');
// });


//#3 nouvelle notation 
Route::view('/','welcome') ;
Route::view('contact','contact') ;
Route::view('a-propos','a-propos') ;


//#4 apres avoir creer un dossier /clients ds resources/views  on y creer un fichier <index.blade.php  

//#5 on  creer sa route  

//  Route::get('/clients', function () {
//      return view('clients.index');
//  });


 //#6 voir index
 //#7  on creer un tableau de prenom ds un varible 

 //----------------------------------

//  Route::get('/clients', function () {

// $clients = [
// 'jean',
// 'marc',
// 'vivien'
// ];


// //on passe notre tableau de donne en 2em argument de notre function view
// //qui aura une cle le premier clients(ça peut nimp quel nom ex:data ) et qui aura comme valeur/pointera vers notre tableau de donnes $clients
//     return view('clients.index',['data'=> $clients]);
// });
//-------------------------------------------------

 //#8 voir index
 //#9 voir index

 //#10  creeation d un controller
 //php artisan make:controller ClientsController
 //app/http/controller


 //#12 route pour la fct list ds le clientcontroller
 Route::get('/clients','ClientsController@list') ;


//#13 ajout de css avec boottrap 
//#14 ajout d une navbar 
//#15 ajout d un layout.blade.php ds view
//#16 on y copier ts le fichier welcome .blade.oho et on trie //ce qu on ne gardera pas sera les ch dynamique cad amener par les autre pges 
//#17  ds le layout y placer  @yield('content')  en function des vues celle vont heriter du layout et le contenue changera en fct de a vue
//pour cela ds chaque vues heritire y plaver @extends('layout')
//et le contenue de chaque vue sera placer ds une section content avec une end section 
// @section('content')
// <h1>contactez nous</h1>
// <p>0692xxxxxx</p>
// @endsection

//#18 pour la vue welcome du coup on efface ts et on y met 
// @extends('layout')
// @section('content')
// <h1>appprendre laravel </h1>
// @endsection

//#19 base de donne en local en un seul fichier avec my sqlite 

// ds /database creer un fichier databese.sqlite
//fichier env changer my sql par sqllite 
//on peut suppr ces ligne 
// DB_HOST=127.0.0.1
// DB_PORT=3306
// DB_DATABASE=laravel
// DB_USERNAME=root
// DB_PASSWORD=

//#20 laragon php php.ini  decommenter extension pdo sqlite en enlevant le point virgule devant 
//stop strart laragon 

//#21   php artisan migrate
//#22 creation d un model php artisan make:model Client -m
//le tiret m permet de faire un migration en meme temps (pour definir notre table ds la bdd)
//#23 dans la nouvelle migration rajouter  $table->string('name');
//puis php artisan migrate:refresh   elimine migration initial et refais une migration 

//#24 php artisan tinker

// #25 ajouter des client
// $client = new App\Client();
// $client->name = 'Marc';
// $client->save();

//$client = new App\Client();
// $client->name = 'Paul';
// $client->save();

//$client = new App\Client();
// $client->name = 'Anna';
// $client->save();

//#26 afficher ts les clients
// App\Client::all();

//#27 voir client controller

//29
Route::post('/clients','ClientsController@store') ;

//30 vaidation request ds la fct store
//31 32  visuel message d error  client/index.blade.php
//34 customiser visuel message d error  voir controllercloent

//35 rajouter un champs email ds migration client 
//   $table->string('email');
//puis php artisan migrate:refresh
//36 rajouter un input + invalide msg 
//37 rajouter msg ds client controller 
//38rajouter ds le validate et avans le save de la bdd 
//39afficher ds la vue client/index.blade.php
//40 client active ou pas video 11
//41ajout champ + messge error
//42client mesg d erroor + ajout bdd 
//43 eloquent where 
//44 modificaion du where  + scope() ds model client 
//45on renomme ts les speudo par name 
//46 on efface ds ctrl des truc 
//47 error securite orm mass ssignment   d ou protect fillable 


//48 on crre un model entreprise  + -m pour creer une moigration 
// 49 ds la migration on y met  $table->string('name');

//ds le odel on met fillable ou guarded    protected  $guarded = [];
//  php artisan migrate:refresh 
//
// on akout une etp ds la bdd 
//php artisan tinker
// App\Entreprise::create(['name' => 'ma super entreprise']);
// App\Entreprise::create(['name' => 'ma mega entreprise']);
// laravel relationship
//one to many 
//une etp has many  clients 
//un client belongto une entreprise 
//on creer fct clients et etp ds les model 
// pouis ds les migrationb  $table->unsignedInteger()('entreprise_id');
// exit pour quitter tinker
// refresh 

//13  8.50
//copy le formulaire pour cham^p etp 
// client controller recupere ts les etp 
//attention changer data to client a cose du compact 








