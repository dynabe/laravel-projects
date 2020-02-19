<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;
use App\Http\Requests\ClientsRequest;

class clientsController extends Controller
{
    public function index(Clients $clients) {

        $clients = Clients::paginate(7);
        
        return view('clients.index', compact('clients'));
    }

    public function create() {
        
        return view('clients.create');
    }

    public function store(ClientsRequest $request) {
        
        Clients::create($request->all());

        return redirect()->route('clients.index');
    }

    public function edit(Clients $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(ClientsRequest $request, Clients $client)
    {
        $client->update($request->all());
        return redirect()->route('clients.index');
    }


    public function destroy(Clients $client) {

        $client->delete();
        return redirect()->route('clients.index');
    }

    public function show($slug){

        $page = Clients::where('email', $slug)->FirstOrFail();

        return view('clients.show', compact('page'));
        

    }

}
