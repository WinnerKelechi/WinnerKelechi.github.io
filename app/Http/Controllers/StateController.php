<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\City;

class StateController extends Controller
{
    public function getStates($countryId){
        $states = State::where('country_id', $countryId)->get();

        return response()->json($states);
    }

    public function getCities($stateId){
        $cities = City::where('state_id', $stateId)->get();

        return response()->json($cities);
    }
}
