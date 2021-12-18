<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Team;

class TeamWebController extends Controller
{
    public function index()
    {
        $listTeams = Team::all();
        return view('web.team')->with(['listTeams' => $listTeams]);
    }

}
