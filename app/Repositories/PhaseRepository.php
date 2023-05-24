<?php

namespace App\Repositories;

use App\Models\Phase;
use App\Models\Scenario;
use App\Models\PhaseDevice;

class PhaseRepository
{

    public function createAndSave(int $scenario_id, String $name)
    {
        // only for testing. Should be removed for prod.
        echo "creating phase";
        echo "\n" . gettype($name);

        // create the phase with all fillable attributes
        $phase = new Phase();
        $phase->name = $name;
        
        // query the corresponding scneario
        $scenario = Scenario::find($scenario_id);
        if ($scenario === null)
        {
            /**
             * Send some message to User, that an error has occured. 
             * Whenever phases are created, a scenario should already exist. This can never be a user error.
             */
            return null;
        }

        // associate the phase with it's scenario
        $phase->scenario()->associate($scenario);

        $phase->save();
    }

    public function getAllByScenario($scenario_id)
    {
        $scenario = Scenario::find($scenario_id);
        if ($scenario === null)
        {
            return null;
        }

        $phases = $scenario->phases;
        return $phases;
    }

    public function getById(int $phase_id)
    {
        $phase = Phase::find($phase_id);
        if ($phase === null)
        {
            return null;
        }

        return $phase;
    }

    public function updateById(int $phase_id, String $name)
    {
        $phase = Phase::find($phase_id);
        if ($phase === null)
        {
            return null;
        }

        $phase->name = $name;
        $phase->save();
    }

    public function delete(int $phase_id)
    {
        $phase = Phase::find($phase_id);
        if ($phase === null)
        {
            return null;
        }

        $phase->delete();
    } 

    public function getAllPhaseDevices()
    {
        $phase_devices = PhaseDevice::all();
        return $phase_devices;
    }

}
