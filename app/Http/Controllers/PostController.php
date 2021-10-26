<?php

namespace App\Http\Controllers;
use App\Models\posts;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Resources\PostResource;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = posts::get();
        return PostResource::collection($posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newPost = posts::create( [
            'name' =>  $request->name,
            'phonenumber' => $request->phonenumber,
            'reserved'=> '1',
            'content' => $request-> content,
            'userid' => '8'
        ]);

       


        
        // return "Hello. The data actually hit this point.";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $existingPost = posts::find($id);
        if($existingPost){
            $existingPost -> completed = $request->post['completed'] ? true : false;
            $existingPost -> completed_at= $request->post['completed'] ? Carbon::now() : null;
            $existingPost->save();
            return $existingPost;
        }
        return "Item not found";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existingPost = posts::find($id);
        if($existingPost){
            $existingPost->delete();
            return "Post successfully deleted.";
        }
        return "Post not found";
    }
}
