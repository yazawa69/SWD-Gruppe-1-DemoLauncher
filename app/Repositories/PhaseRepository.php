<?php

namespace App\Repositories;

use App\Models\Phase;
use App\Models\Scenario;

class PhaseRepository
{
    public function createAndSave(int $scenario_id, String $name)
    {
        // create the phase
        $phase = new Phase();

        $scenario = Scenario::find($scenario_id);
        if (!$scenario)
        {
            return false;
        }

        $phase->scenario_id = $scenario_id;
        $phase->name = $name;

        $position = $scenario->phases->count() + 1;
        $taken_positions = $scenario->phases()->pluck('position');
        if ($taken_positions->contains($position))
        {
            return false;
        }
        $phase->position = $position;

        return $phase->save();        
    }

    public function getById(int $phase_id)
    {
        $phase = Phase::find($phase_id);
        return $phase;
    }

    public function getAllByScenario($scenario_id)
    {
        $phases = Phase::where('scenario_id', $scenario_id)->get();
        return $phases;
    }

    public function updateById(int $phase_id, String $name)
    {
        $phase = Phase::find($phase_id);
        if (!$phase)
        {
            return false;
        }

        $phase->name = $name;
        return $phase->save();
    }

    public function delete(int $phase_id)
    {
        $phase = Phase::find($phase_id);
        if (!$phase)
        {
            return false;
        }

        return $phase->delete();
    } 

    public function getAllPhaseDevices(int $phase_id)
    {
        $phase = Phase::find($phase_id);
        if (!$phase)
        {
            return false;
        }
        return $phase->phaseDevices;
    }

}
