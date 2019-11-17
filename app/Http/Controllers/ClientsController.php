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
       // $clients = Client::all();
       
       
       //#43 a la place d utiliser ce tableau on utilise
         $clients = Client::status();
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
            'name.required' => 'le :attribute est obligatoire.',
            'name.min' => 'le :attribute doit etre 3 lettre.',
            'email.required' => 'l :attribute est obligatoire.',
            'status.required' => 'un :attribute est obligatoire.',
        ];

     $data=request()->validate([
        'name' => 'required|min:3',
        'email' => 'required|email',
        'status' => 'required|integer'
        ],$messages);

        //dd($data);



//46
    //     $pseudo = request('name');
    //     $email = request('email');
    //     $status = request('status');
    //  // dd($pseudo);

    //     $client = new Client();
    //     $client->name = $pseudo;
    //     $client->email = $email;
    //     $client->status = $status;
    //     $client->save();



    //necessite que les champ de l objet data sonr raccord avec les chant du client ds la migration 
Client::create($data);

        return back();
    }

}
