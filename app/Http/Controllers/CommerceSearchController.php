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

        $commerces = Commerce::all();
        return response()->json($commerces);
    }
}
