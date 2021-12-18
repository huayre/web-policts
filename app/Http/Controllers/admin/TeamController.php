<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $listTeams = Team::all();
        return view('admin.team.index')->with(['listTeams' => $listTeams]);
    }

    public function store(Request $request)
    {
        $response = ['status' => true];
        try {
            if ($request->hasFile('url_photo') && $request->hasFile('url_cv')) {
                $pathPhoto = $request->file('url_photo')->store('photos');
                $pathPhoto = asset('storage/' . $pathPhoto);
                $pathCv = $request->file('url_cv')->store('cvs');
                $pathCv = asset('storage/' . $pathCv);
            }
            Team::create([
                'full_name' => $request->full_name,
                'description' => $request->description,
                'url_photo' => $pathPhoto,
                'url_cv' => $pathCv,
            ]);
        } catch (\Exception $e) {
            $response = ['status' => false];
        }
        return response()->json($response);
    }

}
