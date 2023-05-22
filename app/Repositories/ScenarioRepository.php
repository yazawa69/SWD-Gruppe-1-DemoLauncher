<?php

namespace App\Repositories;

use App\Models\Scenario;

class ScenarioRepository
{

    public function createAndSave(String $name, String $description)
    {
        $scenario = Scenario::create([
            'name' => $name,
            'description' => $description,
        ]);

        return $scenario;
    }

    public function getAll()
    {
        $scenarios = Scenario::all();
        return $scenarios;
    }

    public function getById(int $scenario_id)
    {
        $scenario = Scenario::find($scenario_id);
        if ($scenario === null)
        {
            return null;
        }

        return $scenario;
    }

    public function updateById(int $scenario_id, String $name, String $description)
    {
        $scenario = Scenario::find($scenario_id);
        if ($scenario === null)
        {
            return null;
        }

        $scenario->name = $name;
        $scenario->description = $description;
        $scenario->save();
    }

    public function deleteById(int $scenario_id)
    {
        $scenario = Scenario::find($scenario_id);
        if ($scenario === null)
        {
            return null;
        }

        $scenario->delete();
    }
    
}
