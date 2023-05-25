<?php

namespace App\Repositories;

use App\Models\Scenario;

class ScenarioRepository
{

    public function getAll()
    {
        $scenarios = Scenario::all();
        return $scenarios;
    }

    public function createAndSave(String $name, String $description)
    {
        $scenario = Scenario::create([
            'name' => $name,
            'description' => $description,
        ]);
        
        return $scenario;
    }

    public function getById(int $scenario_id)
    {
        $scenario = Scenario::find($scenario_id);
        return $scenario;
    }

    public function updateById(int $scenario_id, String $name, String $description)
    {
        $scenario = Scenario::find($scenario_id);
        if (!$scenario)
        {
            return false;
        }

        $scenario->name = $name;
        $scenario->description = $description;
        return $scenario->save();
    }

    public function deleteById(int $scenario_id)
    {
        $scenario = Scenario::find($scenario_id);
        if (!$scenario)
        {
            return false;
        }

        return $scenario->delete();
    }
}
