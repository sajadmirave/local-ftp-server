<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class FileManagerController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->file("file");
        $file_path = public_path('uploads');

        $file->move($file_path, $file->getClientOriginalName());

        return response()->json([
            'message' => "file has been successfuly uploaded..."
        ], 200);
    }

    public function links_page()
    {
        $file_path = public_path('uploads');

        // in here i want to get name and put into blade template to a tag and download it over there
        $files = File::files($file_path);

        return view('links', compact('files'));
    }

    public function download($file_name)
    {
        $file_path = public_path('/uploads/' . $file_name);

        return response()->download($file_path, $file_name);
    }

    public function deleteAll()
    {
        $file_path = public_path('/uploads');
        $files = File::files($file_path);

        foreach ($files as $file) {
            File::delete($file);
        }

        return Redirect()->back();
    }
}