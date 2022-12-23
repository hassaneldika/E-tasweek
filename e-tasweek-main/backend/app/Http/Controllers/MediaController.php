<?php

namespace App\Http\Controllers;

use App\Models\Media;
use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    //get Media with service and project related to
    //    public function index(): JsonResponse
    //    {
    //        $media = Media::with('project','service')->get();
    //        return response()->json($media);
    //    }

    //get media
    public function index(): JsonResponse
    {
        $media = Media::all();
        return response()->json($media);
    }

    //get media bu id
    public function show($id): JsonResponse
    {
        $media = Media::findOrFail($id);
        return response()->json($media);
    }

    //add Media
    public function store(Request $request): JsonResponse
    {
        $media = new Media();
        $media->projects_id = $request->projects_id;
        $media->services_id = $request->services_id;
        $media->mi_text = $request->mi_text;
        $media->mi_type = $request->mi_type;
        $media->mi_for = $request->mi_for;
        $media->save();
        return response()->json(["message" => "Media Added"]);
    }

    //update media
    public function update(Request $request, $id): JsonResponse
    {
        $media = Media::findOrFail($id);
        $newInput = $request->except(['_media', 'token']);
        $media->update($newInput);
        return response()->json(["Media" => "Media Updated"]);
    }

    //delete media
    public function destroy($id): JsonResponse
    {
        $media = Media::findOrFail($id);
        $media->delete();
        return response()->json(["Media" => "Media Deleted !!"]);
    }
}
