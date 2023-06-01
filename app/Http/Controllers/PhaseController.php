<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\PhaseRepository;
use Exception;

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
            return view('phase-new');
        }

        public function create(int $scenario_id, Request $req)
        {
            $data = $req->all();
            
            // catch DB related errors
            try 
            {
                $saved = $this->phases->createAndSave($scenario_id, $data['name']);
            }
            catch(Exception $e)
            {
                return response($e->getMessage(), 500);
            }
            if(!$saved) 
            {
                // entry could not be inserted into DB
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

            $phase_devices = $phase->phaseDevices;

            return view('phase', ['phase' => $phase, 'phase_devices' => $phase_devices]);
        }

        public function edit(int $scenario_id, int $phase_id)
        {
            // TODO: will return the edit phase view
            $phase = $this->phases->getById($phase_id);
            if (!$phase)
            {
                return response(500);
            }

            $phase_devices = $phase->phaseDevices;

            

            return view('phases.edit', ['phase' => $phase, 'phase_devices' => $phase_devices]);
        }

        public function update(int $scenario_id, int $phase_id, Request $req)
        {
            $data = $req->all();
            $this->phases->updateById($phase_id, $data['name']);
            return response(200);
        }

        public function destroy(int $scenario_id, int $phase_id)
        {
            $this->phases->delete($phase_id);
            return response(200);
        }
}
