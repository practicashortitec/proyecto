<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Web_Test;

class WebTestController extends Controller
{
    public function storage(Request $request){
        $web_test = new Web_Test();
        $web_test->url_web = $request->url_web;
        $web_test->test_1 = $request->test_1;
        $web_test->test_2 = $request->test_2;
        $web_test->test_3 = $request->test_3;
        $web_test->test_4 = $request->test_4;
        $web_test->test_5 = $request->test_5;
        $web_test->test_6 = $request->test_6;
        $web_test->test_7 = $request->test_7;
        $web_test->test_8 = $request->test_8;
        $web_test->test_9 = $request->test_9;
        $web_test->test_10 = $request->test_10;
        $web_test->test_11 = $request->test_11;
        $web_test->test_12 = $request->test_12;
        $web_test->test_13 = $request->test_13;
        $web_test->test_14 = $request->test_14;
        $web_test->result_CMS = $request->result_CMS;
        $web_test->save();

        return response()->json(["message" => "Web Test Added"],200);
    }

/*
    public function insert(){
        $web_test = new Web_Test();
        $web_test->url_web = "https://suplementaz.com";
        $web_test->test_1 = "test 1 prueba";
        $web_test->test_2 = "test 2 prueba";
        $web_test->test_3 = "test 3 prueba";
        $web_test->test_4 = "test 4 prueba";
        $web_test->test_5 = "test 5 prueba";
        $web_test->test_6 = "test 6 prueba";
        $web_test->test_7 = "test 7 prueba";
        $web_test->test_8 = "test 7 prueba";
        $web_test->test_9 = "test 9 prueba";
        $web_test->test_10 = "test 10 prueba";
        $web_test->test_11 = "test 11 prueba";
        $web_test->test_12 = "test 12 prueba";
        $web_test->test_13 = "test 13 prueba";
        $web_test->test_14 = "test 14 prueba";
        $web_test->result_CMS = "es un Wordpress (prueba)"; 
        $web_test->save();

        echo "insertados web test OK";
    }

*/

    public function insert(){
        $web_test = new Web_Test();
        $web_test->url_web = "https://suplementaz.com";
        $web_test->test_1 = "test 1 prueba";
        $web_test->test_2 = "test 2 prueba";
        $web_test->test_3 = "test 3 prueba";
        $web_test->test_4 = "test 4 prueba";
        $web_test->test_5 = "test 5 prueba";
        $web_test->test_6 = "test 6 prueba";
        $web_test->test_7 = "test 7 prueba";
        $web_test->test_8 = "test 7 prueba";
        $web_test->test_9 = "test 9 prueba";
        $web_test->test_10 = "test 10 prueba";
        $web_test->test_11 = "test 11 prueba";
        $web_test->test_12 = "test 12 prueba";
        $web_test->test_13 = "test 13 prueba";
        $web_test->test_14 = "test 14 prueba";
        $web_test->result_CMS = "es un Wordpress (prueba)"; 
        $web_test->save();

        echo "insertados web test OK";
    }

    public function index(){
        $web_test = Web_Test::all();
        return response()->json($web_test);
    }

    public function show($id){
        $web_test = Web_Test::find($id);
        if(!empty($web_test)){
            return response()->json($web_test);
        } else {
            return response()->json(["message"=> "Web test not found"],404);
        }
    }

    public function update(Request $request, $id){  
        if(Web_Test::where("id", $id)->exists()) {
            $web_test = Web_Test::find($id);
            $web_test->url_web = is_null($request->url_web) ? $web_test->url_web : $request->url_web;
            $web_test->test_1 = is_null($request->test_1) ? $web_test->test_1 : $request->test_1;
            $web_test->test_2 = is_null($request->test_2) ? $web_test->test_2 : $request->test_2;
            $web_test->test_3 = is_null($request->test_3) ? $web_test->test_3 : $request->test_3;
            $web_test->test_4 = is_null($request->test_4) ? $web_test->test_4 : $request->test_4;
            $web_test->test_5 = is_null($request->test_5) ? $web_test->test_5 : $request->test_5;
            $web_test->test_6 = is_null($request->test_6) ? $web_test->test_6 : $request->test_6;
            $web_test->test_7 = is_null($request->test_7) ? $web_test->test_7 : $request->test_7;
            $web_test->test_8 = is_null($request->test_8) ? $web_test->test_8 : $request->test_8;
            $web_test->test_9 = is_null($request->test_9) ? $web_test->test_9 : $request->test_9;
            $web_test->test_10 = is_null($request->test_10) ? $web_test->test_10 : $request->test_10;
            $web_test->test_11 = is_null($request->test_11) ? $web_test->test_11 : $request->test_11;
            $web_test->test_12 = is_null($request->test_12) ? $web_test->test_12 : $request->test_12;
            $web_test->test_13 = is_null($request->test_13) ? $web_test->test_13 : $request->test_13;
            $web_test->test_14 = is_null($request->test_14) ? $web_test->test_14 : $request->test_14;
            
            $web_test->result_CMS = is_null($request->result_CMS) ? $web_test->result_CMS : $request->result_CMS;

 
        }
    }

    public function destroy($id){
        if(Web_Test::where("id", $id)->exists()) {
            $web_test = Web_Test::find($id);
            $web_test->delete();
            return response()->json(["message"=> "web test deleted"],200);
        } else {
            return response()->json(["message"=> "web test not found"],404);
        }
    }
}
