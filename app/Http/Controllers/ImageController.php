<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;
use App\Http\Resources\PropertyResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
class ImageController extends Controller
{
    public function FilesName($id){
        return Image::select('preview')->where('property_id',$id)->get();
    }

    public function getFile($name){
        $filePath = storage_path('app/images/');
        return response()->file($filePath.$name);
    }

    public function upload(StoreImageRequest $request)
    {
        if($request->has('image')){
            $file = $request->file('image');
            $path = $request->file('image')->store('photos');
            $imageModel = new Image;
            $imageModel->preview = $path;
            $imageModel->property_id = $request->id_property;
            $imageModel->save();

            return response("Success");

        }
        else{
            return response("NO");
        }
    }
}
