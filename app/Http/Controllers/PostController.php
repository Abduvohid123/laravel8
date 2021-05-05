<?php

namespace App\Http\Controllers;

use App\Models\post;
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
        $users = post::all();
        return view('posts.index', ['posts' => $users]);
    }

    public function addPost()
    {
        return view('posts.addpost');
    }

    public function addSubmit(Request $request)
    {
        $post = new post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return back()->with('post', 'Malumot bazaga yozildi');

    }

    public function postview($id)
    {
        $post = post::findOrNew($id);
        return view('posts.postview', compact('post'));
    }

    public function delete($id)
    {
        post::destroy($id);
        return back()->with('delete', "malumot o'chirildi");
    }

    public function edit($id)
    {
        $post = post::findOrNew($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request)
    {

        $post = post::find($request->id);
        $post->title=$request->title;
        $post->description=$request->description;
        $post->save();
        return back()->with('update', "malumot o'zgartirildi");

    }


}
