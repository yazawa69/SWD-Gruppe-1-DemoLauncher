<?php

namespace App\Repositories;

use App\Models\Phase;
use App\Models\Scenario;

class PhaseRepository
{

    public function create_and_save(int $scenario_id, String $name)
    {
        // only for testing. Should be removed for prod.
        echo "creating phase";
        echo "\n" . gettype($name);

        // create the phase with all fillable attributes
        $phase = Phase::create([
            'name' => $name,
        ]);

        // query the corresponding scneario
        $scenario = Scenario::find($scenario_id);
        if ($scenario === null)
        {
            /**
             * Send some message to User, that an error has occured. 
             * Whenever phases are created, a scenario should already exist. This can never be a user error.
             */
            return response(401);
        }

        // associate the phase with it's scenario
        $phase->scenario()->associate($scenario);

        return $phase;
    }

    public function update()
    {

    }

    public function read()
    {

    }

    public function delete()
    {

    }

}
