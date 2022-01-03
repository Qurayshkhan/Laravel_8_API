<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class post extends Controller
{
    public function show(){
        $responce=Http::get('https://jsonplaceholder.typicode.com/posts');
       // dd($responce->collect());
       return view('welcome',['data'=>$responce->collect()]);
    }
    public function single_post($id){
        $responce=Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
       // dd($responce->collect());
       return view('single',['data'=>$responce->collect()]);
    }
    public function add(){
        $response=Http::post('https://reqres.in/api/users',[
            'name'=>'Hassan',
            'job'=>'Web Dev'
        ]);
        dd($response->json());
    }
    public function update($id){
        $response=Http::put('https://reqres.in/api/users/'.$id,[
            'name'=>'Husnain',
            'job'=>'Web Dev'
        ]);
        dd($response->json());
    }
    public function delete($id){
        $response=Http::delete('https://reqres.in/api/users/'.$id,[
            'name'=>'Husnain',
            'job'=>'Web Dev'
        ]);
        dd($response->json());
    }
}
