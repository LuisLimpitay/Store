<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreCategoryRequests;
use App\Http\Requests\Category\UpdateCategoryRequests;
use App\Http\Requests\Client\StoreClientRequests;
use App\Http\Requests\Client\UpdateClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client ::all();
        return view('admin.clients.index',compact('clients'));
    }

    public function create()
    {
        return view('admin.clients.create');
    }


    public function store(StoreClientRequests $request, Client $client)
    {
        Client::create($request->all());
        return redirect()->route('admin.clients.index');
    }


    public function show(Client $client)
    {
        //
    }

    public function edit(Client $client)
    {
        return view('admin.clients.edit', compact('client'));
    }


    public function update(UpdateClientRequest $request, Client $client)
    {
        Client::create($request->all());
        return redirect()->route('admin.clients.index');
    }


    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('admin.clients.index');
    }
}
