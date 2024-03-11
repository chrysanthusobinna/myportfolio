<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
 
 
        
        $filePath = storage_path('app/public/chrysanthus-cv.pdf');
        return response()->download($filePath, 'chrysanthus-cv.pdf');


    }
}
