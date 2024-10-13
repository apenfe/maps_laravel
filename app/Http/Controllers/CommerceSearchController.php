<?php

namespace App\Http\Controllers;

use App\Models\Commerce;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CommerceSearchController extends Controller
{

    public function __invoke(Request $request): View|JsonResponse
    {
        if(!$request->ajax()) {
            return view('commerce.search');
        }

        $lat = $request->input('lat');
        $lng = $request->input('lng');
        $radius = $request->input('radius', 5);
        $types = array_filter(explode(',', $request->input('types'))) ?: null;

        $commerces = Commerce::search($lat, $lng, $radius, $types)->get();
        return response()->json($commerces);
    }
}
