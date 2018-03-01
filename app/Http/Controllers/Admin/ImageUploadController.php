<?php

namespace Vhom\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Vhom\Http\Controllers\Controller;
use Vhom\Project;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        if($request->hasFile('background_image')){
            if(isset($request->id)){
                $file = $request->file('background_image');
                $ext  = $file->getClientOriginalExtension();
                $name = 'projects/background/'.bin2hex(random_bytes(8)).".$ext";
                Storage::disk('local')->put($name,file_get_contents($file),'public');
                Project::find($request->id)->update([
                    'background_image' => $name
                ]);
            }
        } else if ($request->hasFile('lead_image')){
            if(isset($request->id)){
                $file = $request->file('lead_image');
                $ext  = $file->getClientOriginalExtension();
                $name = 'projects/lead/'.bin2hex(random_bytes(8)).".$ext";
                Storage::disk('local')->put($name,file_get_contents($file),'public');
                Project::find($request->id)->update([
                    'lead_image' => $name
                ]);
            }
        }
    }
}
