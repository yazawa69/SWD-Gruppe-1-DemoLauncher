<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\PhaseRepository;

class PhaseController extends Controller
{
        
        protected PhaseRepository $phases;
    
        public function __construct(PhaseRepository $phases)
        {
            $this->phases = $phases;
        }

        public function new(Request $req)
        {
            // TODO: display phase creation view
            return response(200);
        }

        public function create(int $scenario_id, Request $req)
        {
            $data = $req->all();
            if(!$this->phases->createAndSave($scenario_id, $data['name'], $data['description']))
            {
                return response(500);
            }
            return response(200);
        }

        public function show(int $scenario_id, int $phase_id)
        {
            // TODO: will return the single phase view
            $phase = $this->phases->getById($phase_id);
            if (!$phase)
            {
                return response(500);
            }
            return response(200)->json($phase);
        }

        public function edit(int $scenario_id, int $phase_id)
        {
            // TODO: will return the edit phase view
            $phase = $this->phases->getById($phase_id);
            if (!$phase)
            {
                return response(500);
            }
            return response()->json($phase);
        }

        public function update(int $scenario_id, int $phase_id, Request $req)
        {
            $data = $req->all();
            $this->phases->updateById($phase_id, $data['name'], $data['description']);
            return response(200);
        }

        public function delete(int $scenario_id, int $phase_id)
        {
            $this->phases->delete($phase_id);
            return response(200);
        }

}
