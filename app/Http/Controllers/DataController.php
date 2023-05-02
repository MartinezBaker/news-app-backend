<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataController extends Controller
{
    public function generalNews()
    {
        $response = Http::get('https://newsdata.io/api/1/news?apikey=pub_21317ca1fef6ce0e0c6dc915191f2c0725c17&country=us');
        
        $data = $response->json();

        return view('news', ['data' => $data]);
    }

    public function techNews()
    {
        $response = Http::get('https://newsdata.io/api/1/news?apikey=pub_21317ca1fef6ce0e0c6dc915191f2c0725c17&country=us&category=technology');
        
        $data = $response->json();

        return view('news', ['data' => $data]);
    }

    public function businessNews()
    {
        $response = Http::get('https://newsdata.io/api/1/news?apikey=pub_21317ca1fef6ce0e0c6dc915191f2c0725c17&country=us&category=business');
        
        $data = $response->json();

        return view('news', ['data' => $data]);
    }

    public function newsdataAuthors()
    {
        $response = HTTP::get('https://newsdata.io/api/1/news?apikey=pub_21317ca1fef6ce0e0c6dc915191f2c0725c17&language=en');

        $data = $response->json();

        return view('news', ['data' => $data]);
    }

    public function scienceNews()
    {
        $response = Http::get('https://api.nytimes.com/svc/topstories/v2/science.json?api-key=UkfbVcrTs1O6FeoNR2qCkLsshBrYxVB8');

        $data = $response->json();

        return view('news', ['data' => $data]);
    }

    public function worldNews()
    {
        $response = Http::get('https://api.nytimes.com/svc/topstories/v2/world.json?api-key=UkfbVcrTs1O6FeoNR2qCkLsshBrYxVB8');

        $data = $response->json();

        return view('news', ['data' => $data]);
    }

    public function sportsNews()
    {
        $response = Http::get('https://api.nytimes.com/svc/topstories/v2/sports.json?api-key=UkfbVcrTs1O6FeoNR2qCkLsshBrYxVB8');

        $data = $response->json();

        return view('news', ['data' => $data]);
    }

    public function nytAuthors()
    {
        $response = Http::get('https://api.nytimes.com/svc/topstories/v2/home.json?api-key=UkfbVcrTs1O6FeoNR2qCkLsshBrYxVB8');

        $data = $response->json();

        return view('news', ['data' => $data]);
    }

    public function entertainmentNews()
    {
        $response = Http::get('https://newsapi.org/v2/top-headlines?category=entertainment&apiKey=188dcb46d9f24b36b3e0a2231f0422d4');

        $data = $response->json();

        return view('news', ['data' => $data]);
    }

    public function healthNews()
    {
        $response = Http::get('https://newsapi.org/v2/top-headlines?category=health&apiKey=188dcb46d9f24b36b3e0a2231f0422d4');

        $data = $response->json();

        return view('news', ['data' => $data]);
    }

    public function newsapiAuthors()
    {
        $response = Http::get('https://newsapi.org/v2/top-headlines?language=en&apiKey=188dcb46d9f24b36b3e0a2231f0422d4');

        $data = $response->json();

        return view('news', ['data' => $data]);
    }
}
