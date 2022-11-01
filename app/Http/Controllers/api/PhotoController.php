<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use App\Models\Countries;

class PhotoController extends Controller
{
    public function uploadPhoto(Request $request, $photo)
    {

        // return redirect('api/profile')->with([
        //     'success' => 'Photo has been uploaded.',
        // ]);

        return response()->json($photo);
    }

    public function downloadPhoto(Request $request, $photo)
    {

        // return redirect('api/profile')->with([
        //     'success' => 'Photo has been downloaded.',
        // ]);

        return response()->json($photo);
    }
}
