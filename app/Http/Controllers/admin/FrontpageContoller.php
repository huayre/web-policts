<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class FrontpageContoller extends Controller
{
    public function index()
    {
        $listPage = Page::all();
        return view('admin.page.index')->with(['listPage' => $listPage]);
    }

    public function store(Request $request)
    {
        $response = ['status' => true];
        try {
            if ($request->hasFile('url_img')) {
                $pathPhoto = $request->file('url_img')->store('pages');
                $pathPhoto = asset('storage/' . $pathPhoto);
            }
            Page::create(['url_img' => $pathPhoto]);
        } catch (\Exception $e) {
            Log::error('Error al subir imagen :' . $e->getMessage() . ' Track:' . $e->getTrace());
            $response = ['status' => false];
        }
        return response()->json($response);
    }

    public function delete($id)
    {
        $response = ['status' => true];
        try {
            $page = Page::find($id);
            $page->delete();
        } catch (\Exception $e) {
            Log::error('Error al eliminar imagen :' . $e->getMessage() . ' Track:' . $e->getTrace());
            $response = ['status' => false];
        }
        return response()->json($response);
    }

}
