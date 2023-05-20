<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\{ScenarioRepository, PhaseRepository};
use Illuminate\Http\Request;

class Test extends Controller
{
    protected ScenarioRepository $szenarios;
    protected PhaseRepository $phases;


    public function __construct(ScenarioRepository $szenarios, PhaseRepository $phases)
    {
        $this->szenarios = $szenarios;
        $this->phases = $phases;
    }

    public function createScenario(Request $req)
    {
        $data = $req->all();
        $this->szenarios->create_and_save($data['name'], $data['description'], array());
        return response(200);
    }

    public function createPhase(Request $req)
    {
        $data = $req->all();
        $this->phases->create_and_save($data['id'], $data['name']);
        return response(200);
    }
}
