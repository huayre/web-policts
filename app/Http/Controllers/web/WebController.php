<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use App\Models\Page;
use App\Models\Team;

class WebController extends Controller
{
    public function home()
    {
        $pages = Page::all();
        $notices = Notice::all();
        return view('web.home')->with(['pages' => $pages, 'notices' => $notices]);
    }

    public function team()
    {
        $listTeams = Team::all();
        return view('web.team')->with(['listTeams' => $listTeams]);
    }

}
