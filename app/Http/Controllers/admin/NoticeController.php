<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NoticeController extends Controller
{
    public function index()
    {
        $notices = Notice::all();
        return view('admin.notice.index');
    }

    public function create()
    {
        return view('admin.notice.create');
    }

    public function store(Request $request)
    {
        $status =  true;
        try {
            if ($request->hasFile('img_notice')) {
                $pathPhoto = $request->file('img_notice')->store('notice');
                $pathPhoto = asset('storage/' . $pathPhoto);
            }
            Notice::create([
                'title' => $request->title,
                'extract' => $request->extract,
                'img_notice' => $pathPhoto,
                'notice' => $request->notice
            ]);
        } catch (\Exception $e) {
            $status =  false;
        }
        return response()->json(['status' => $status]);

    }

}
