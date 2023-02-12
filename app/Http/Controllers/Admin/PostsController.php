<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::query()->search()->paginate(10,['*'], 'page', null);


        return view('admin.posts.posts_index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.posts_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posts = new Posts;
        $posts->posts_category_id = $request->posts_category_id;
        $posts->posts_title = $request->posts_title;
        $posts->images = $request->images;
        $posts->description = $request->description;
        $posts->status = $request->status;
        if ($request->hasFile('images')) {
            $path = $request->file('images')->store('posts', 'public');
            $posts->images = $path;
        }
        $posts->save();

        return redirect()->action([PostsController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Posts::where('id', '=', $id)->select('*')->first();
        $description = html_entity_decode($posts->description);
        return view('admin.posts.posts_detail', compact('posts', 'description'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Posts::findOrFail($id);
        return view('admin.posts.posts_update', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $posts = Posts::find($id);
        $posts->posts_category_id = $request->posts_category_id;
        $posts->posts_title = $request->posts_title;
        $posts->images = $request->images;
        $posts->information = $request->information;
        $posts->description = $request->description;
        $posts->created_at = $request->created_at;
        $posts->status = $request->status;

        $posts->save();
        return redirect()->action([PostsController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Posts::find($id);

        $posts->delete();
        return redirect()->action([PostsController::class, 'index']);
    }
}
