<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;

class AgentController extends Controller
{

  public function getAllAgents(){
        return Agent::all();
    }
    public function getActiveAgents(){
        return Agent::where('is_active', true)->get();
    }

   public function findAgent($id){
        return Agent::findOrFail($id);
    }

    public function createAgent(Request $request){
        return Agent::create([
            'name' => $request->name,
            'type' => $request->type,
            'is_active' => $request->active ?? true,
            'description' => $request->description
        ]);
    }

    public function firstOrCreateAgent(Request $request){
        return Agent::firstOrCreate(
            ['name' => $request->name],
            ['type' => $request->type],
            ['is_active' => $request->active ?? true],
            ['description' => $request->description]
        );

    }

    public function updateAgent(Request $request, $id){
        $agent = Agent::findOrFail($id);
        $agent->update([
            'name' => $request->name,
            'type' => $request->type,
            'is_active' => $request->active,
            'description' => $request->description
        ]);
    }

    public function deleteAgent($id){
        $agent = Agent::findOrFail($id);
        $agent->delete();
    }

    public function upsertAgents(Request $request){
        $request->agents;
// will be an array of associative arrays
    Agent::upsert(
        $agents,
    );
}


}

