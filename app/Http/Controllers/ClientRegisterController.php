<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientRegister;

class ClientRegisterController extends Controller
{
    public function index(){
        $clients = ClientRegister::All();
        return view('frontend.client_registered', ['clients' => $clients]);
    }

    public function create(Request $request){

        $client = new ClientRegister([
            'surname' => $request->get('surname'),
            'name' => $request->get('name'),
            'fullname' => $request->get('fullname'),
            'citizenship' => $request->get('citizenship'),
            'passport_series' => $request->get('passport_series'),
            'passport_number' => $request->get('passport_number'),
            'register_date' => $request->get('register_date'),
            'release_date' => $request->get('release_date'),
            'room_category' => $request->get('room_category'),
            'room_type' => $request->get('room_type'),
            'room_number' => $request->get('room_number'),
        ]);

        $client->save();
        return redirect('/');
    }

}
