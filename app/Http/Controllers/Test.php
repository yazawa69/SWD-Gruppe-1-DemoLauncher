<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\SzenarioRepository;

class Test extends Controller
{
    protected SzenarioRepository $szenarios;

    public function __construct(SzenarioRepository $szenarios)
    {
        $this->szenarios = $szenarios;
    }

    public function create_szenario(Request $req)
    {
        
        $data = $req->all();
        $this->szenarios->create_and_save($data['name'], $data['description'], $data['phases']);
        return response(200);

    }

}
