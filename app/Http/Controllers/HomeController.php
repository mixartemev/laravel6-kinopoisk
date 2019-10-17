<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function getData()
    {
        $domains = DB::table('films')
            ->select('*')
            ->get(); // you were missing the get method
        return response()->json($domains, 200, ['Access-Control-Allow-Origin' => '*']);
    }
}
