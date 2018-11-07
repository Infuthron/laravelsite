<?php
/**
 * Created by PhpStorm.
 * User: Infer
 * Date: 1-11-2018
 * Time: 13:34
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController
{
    public function test(){
        $drivers = DB::table('drivers')->get();
        return view('homepage',['drivers' => $drivers]);
    }
}