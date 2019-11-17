<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientsController extends Controller
{
    //#11


    public function list()
    {
        // $clients = [
        //     'jean',
        //     'marc',
        //     'vivien',
        //     'tom'
        //     ];

        //#27 a la place d utiliser ce tableau on utilise
        $clients = Client::all();
        //#28 on oublie pas pas d importer la class app\Client  ctrl space
            
            
            //on passe notre tableau de donne en 2em argument de notre function view
            //qui aura une cle le premier clients(ça peut nimp quel nom ex:data ) et qui aura comme valeur/pointera vers notre tableau de donnes $clients
        return view('clients.index', ['data' => $clients]);

    }

    public function store()
    {

//34 customiser visuel message d error 
// on creer un ojet mes pour chaque error que l on veut modifier 
        $messages = [
            'pseudo.required' => 'le :attribute est obligatoire.',
        ];

        request()->validate([
        'pseudo' => 'required'
        ],$messages);


        $pseudo = request('pseudo');
     // dd($pseudo);

        $client = new Client();
        $client->name = $pseudo;
        $client->save();



        return back();
    }

}
