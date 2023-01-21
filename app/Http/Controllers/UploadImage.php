<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHelper;
use App\Http\Requests\UploadImageRequest;
use Illuminate\Http\Request;

class UploadImage extends Controller
{
    public function index()
    {
        return view('upload_image');
    }

    public function upload(UploadImageRequest $request)
    {
        try {
            $image = ImageHelper::uploadImage($request);
            return response()->json([
                'status' => 'ok',
                'path' => asset('storage/uploads/2023/'.$image)]);
        } catch (\Throwable $e) {
            $e->getCode();
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }
    }
}
