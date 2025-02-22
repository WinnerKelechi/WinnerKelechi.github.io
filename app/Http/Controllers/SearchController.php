<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;

class SearchController extends Controller
{
    public function search(Request $request){
        $partner = Partner::where('partner_id', $request->query('partner_id'))->first();
        return view('search', compact('partner'));
    }
}
