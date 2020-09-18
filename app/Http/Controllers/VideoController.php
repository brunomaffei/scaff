<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('videos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function formAddVideo()
    {
        return view('addVideo');
    }


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


    public function storeVideo(Request $request)
    {
       //modelo de save;
        $video = new Video();
        $video->descricao = $request->descricao;
        $video->link = $request->link;
        $video->save();

       // echo"Video gravado com sucesso";
        return redirect()->route('admin.home')->with('success', 'Seu video foi gravado');
    }

    public function videoList()
    {
        $video = Video::all();
        return view('listVideo',[
            'videos' => $video
        ]);
    }

    public function videoListAluno()
    {
        $video = Video::all();
        return view('listVideoAluno',[
            'videos' => $video
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    public function formEdit(Video $video)
    {
        return view('editVideo', [
            'video' => $video
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */

    public function edit(Video $video, Request $request)
    {
        //Editando videos
        $video->descricao = $request->descricao;
        $video->link = $request->link;
        $video->save();
        return redirect()->route('admin.home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('admin.home')
                        ->with('Sucesso','Video Deletado');
    }
}
