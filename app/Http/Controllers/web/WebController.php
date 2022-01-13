<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Jobs\ProcessExample;
use App\Models\Notice;
use App\Models\Page;
use App\Models\Team;

class WebController extends Controller
{
    public function home()
    {
        $pages = Page::all('url_img');
        $notices = Notice::select('title','extract','img_notice','id','created_at')
                ->orderBy('created_at','desc')
                ->paginate(5);
        return view('web.home')->with(['pages' => $pages, 'notices' => $notices]);
    }

    public function team()
    {
        $listTeams = Team::all();
        return view('web.team')->with(['listTeams' => $listTeams]);
    }

    public function noticeDescription($id)
    {
        $notice = Notice::find($id);
        return view('web.notice_description')->with(['notice' => $notice]);
    }

}
