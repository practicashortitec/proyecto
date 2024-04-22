<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Urls_Websites;

class UrlWebsitesController extends Controller
{
    public function storage(Request $request){
        $urls_websites = new Urls_Websites;
        $urls_websites->url_web = $request->url_web;
        $urls_websites->web_name = $request->web_name;
        $urls_websites->added_by = $request->added_by;
        $urls_websites->save();

        return response()->json(["message" => "Url Website Added"],200);

    }

    public function insert(){
        $urls_websites = new Urls_Websites;
        $urls_websites->url_web = "https://suplementaz.com";
        $urls_websites->web_name = "SuplementAZ";
        $urls_websites->added_by = 1;
        $urls_websites->save();

        echo "urls websites OK";
    }


    public function index(){
        $urls_websites = Urls_Websites::all();
        return response()->json($urls_websites);
    }

    public function show($id){
        $urls_websites = Urls_Websites::find($id);
        if(!empty($urls_websites)){
            return response()->json($urls_websites);
        } else {
            return response()->json(["message"=> "urls websites not found"],404);
        }
    }

    public function update(Request $request, $id){  
        if(Urls_Websites::where("id", $id)->exists()) {
            $urls_websites = Urls_Websites::find($id);
            $urls_websites->url_web = is_null($request->url_web) ? $urls_websites->url_web : $request->url_web;
            $urls_websites->web_name = is_null($request->web_name) ? $urls_websites->web_name : $request->web_name;
            $urls_websites->added_by = is_null($request->added_by) ? $urls_websites->added_by : $request->added_by;
    
        }
    }

    public function destroy($id){
        if(Urls_Websites::where("id", $id)->exists()) {
            $urls_websites = Urls_Websites::find($id);
            $urls_websites->delete();
            return response()->json(["message"=> "urls websites deleted"],200);
        } else {
            return response()->json(["message"=> "urls websites not found"],404);
        }
    }
}
