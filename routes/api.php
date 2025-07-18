<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentController;
use App\Models\Agent;

Route::get('/agents/all', [AgentController::class, 'getAllAgents']);
Route::get('/agents/active', [AgentController::class, 'getActiveAgents']);
Route::get('/agents/{id}', [AgentController::class, 'findAgent']);
Route::post('/agents/create', [AgentController::class, 'createAgent']);
Route::post('/agents/first-or-create', [AgentController::class, 'firstOrCreateAgent']);
Route::put('/agents/Update/{id}', [AgentController::class, 'updateAgent']);
Route::delete('/agents/Delete/{id}', [AgentController::class, 'deleteAgent']);
Route::post('/agents/upsert', [AgentController::class, 'upsertAgents']);


