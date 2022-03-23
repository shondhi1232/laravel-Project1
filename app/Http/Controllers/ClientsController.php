<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;

class ClientsController extends Controller
{
    public function fetchClients()
    {
        $Clients = Clients::all();
        return $Clients;
    }
}
