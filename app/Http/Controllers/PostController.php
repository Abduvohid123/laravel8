<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function getAllPost()
    {
        $users = DB::table('posts')->get();
        return view('posts.index', ['posts' => $users]);
    }

    public function addPost()
    {
        return view('posts.addpost');
    }

    public function addSubmit(Request $request)
    {
        DB::table('posts')->insert([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return back()->with('post', 'Malumot bazaga yozildi');

    }

    public function postview($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('posts.postview', compact('post'));
    }

    public function delete($id)
    {
        DB::table('posts')->delete($id);
        return back()->with('delete', "malumot o'chirildi");
    }

    public function edit($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request)
    {

        DB::table('posts')->where('id', 8)->update([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return back()->with('update', "malumot o'zgartirildi");

    }


}
