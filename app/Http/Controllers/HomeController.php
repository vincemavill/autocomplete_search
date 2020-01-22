<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        return view("home");
    }

    
    public function google()
    {

        return view("google");
    }

    public function search(Request $request)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://127.0.0.1:8000/api/search_locations',
            CURLOPT_RETURNTRANSFER => true,
            // CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
            // CURLOPT_USERPWD => 'ADMIN : SECRETE123',   <-----  for Basic Auth
            // CURLOPT_TIMEOUT => 30,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
            ),
        ));
    
        $response = curl_exec($curl);
    
        curl_close($curl);
    
        $result = json_decode($response);
    
        $places = $result->data;

        return $places;
    }

















    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Home $home)
    {
        //
    }

    public function edit(Home $home)
    {
        //
    }

    public function update(Request $request, Home $home)
    {
        //
    }

    public function destroy(Home $home)
    {
        //
    }
}
