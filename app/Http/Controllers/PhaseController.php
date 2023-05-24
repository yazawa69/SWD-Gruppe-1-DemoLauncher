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

        public function show(int $scenario_id, int $phase_id)
        {
            $phase = $this->phases->getById($phase_id);
            if ($phase === null)
            {
                return response(404);
            }
            return response()->json($phase);
        }

        public function edit(int $scenario_id, int $phase_id)
        {
            $phase = $this->phases->getById($phase_id);
            if ($phase === null)
            {
                return response(404);
            }
            return response()->json($phase);
        }

        public function create(int $scenario_id, Request $req)
        {
            $data = $req->all();
            $this->phases->createAndSave($scenario_id, $data['name'], $data['description']);
            return response(200);
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
