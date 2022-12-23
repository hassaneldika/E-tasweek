<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;
use Psy\Util\Json;

class OfferController extends Controller
{
    //get All offers

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $offer = Offer::all();
        return response()->json($offer);
    }

    //add Offer

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $offer = new Offer();
        $offer->of_name = $request->of_name;
        $offer->of_image = $request->of_image;
        $offer->of_features = $request->of_features;
        $offer->save();
        return response()->json($offer);
    }

//    public function store(Request $request): JsonResponse
//    {
//        $offer = new Offer();
//        if ($request->of_image) {
//            $getImage = $request->of_image;
//            $imageName = $getImage->getClientOriginalName();
//            $imagePath = public_path() . '/pictures';
//            $getImage->move($imagePath, $imageName);
//            $offer->of_image = $imageName;
//        }
//
//        $of_name = $request->input('of_name');
//        $of_features = $request->input('of_features');
//        $offer->of_name = $of_name;
//        $offer->of_features = $of_features;
//        $offer->save();
//        return response()->json(["message" => "Offer was created successfully"]);
//    }

    // update Offer
    public function update(Request $request, $id): JsonResponse
    {
        $offer = Offer::findOrFail($id);
        $newInput = $request->except(['_method', 'token']);
        $offer->update($newInput);
        return response()->json($offer);
    }

//    public function update(Request $request, $id): JsonResponse
//    {
//        $offer = Offer::findOrFail($id);
//
//        if ($request->of_image) {
//            $imagePath = public_path() . '/pictures/';
//            //remove old file
//            if ($offer->of_image = null && $offer->of_image = "") {
//                $file_old = $imagePath . $offer->of_image;
//                unlink($file_old);
//            }
//            //upload new file
//            $file = $request->of_image;
//            $filename = $file->getClientOriginalName();
//            $file->move($imagePath,$filename);
//            //for update in table
//            $offer->of_image = $filename;
//        }
//        $inputsOffer = $request->except(["_method","token"]);
//        $offer->update($inputsOffer);
//        return response()->json(["Offer"=>"Offer updated successfully"]);
//    }

    // delete offer

    /**
     * @param $id
     * @return JsonResponse
     */
    public function destroy($id): JsonResponse
    {
        $offer = Offer::findOrFail($id);
        $offer->delete();
        return response()->json(['Offer' => 'Offer Deleted Successfully']);
    }

    //get offer by id

    /**
     * @param $id
     * @return JsonResponse
     */
    public function show($id): JsonResponse
    {
        $offer = Offer::findOrFail($id);
        return response()->json($offer);
    }
}
