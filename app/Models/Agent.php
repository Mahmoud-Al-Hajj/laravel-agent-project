<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

        protected $table = 'agents';
        protected $primaryKey = 'id';
        protected $fillable = ['name', 'type','is_active','description'];



}
