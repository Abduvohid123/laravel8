<?php

namespace App\Http\Controllers;

use Faker\Provider\en_US\Text;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function index()
    {
        $response=Http::get('https://jsonplaceholder.typicode.com/posts/1/comments');

        return $response->json();
    }

    public function findById($id)
    {

        $post= Http::get('https://jsonplaceholder.typicode.com/posts/1/posts/');
        return $post->json()[$id];
    }
    public function addPost()
    {

        $post= Http::post('https://jsonplaceholder.typicode.com/posts/1/posts/',[
            'userId'=>1,
            'id'=>1,
            'title'=>Text::randomLetter()
        ]);
        return $post->json();
    }
    public function updatePost()
    {

        $post= Http::put('https://jsonplaceholder.typicode.com/posts/1/posts/',[

            'title'=>"Text::randomLetter()"
        ]);
        return $post->json();
    }

    public function deleteById($id)
    {

        $post= Http::delete('https://jsonplaceholder.typicode.com/posts/1/posts/'.$id);
        return $post->json();
    }
}
