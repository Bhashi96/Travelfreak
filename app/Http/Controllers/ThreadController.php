<?php

namespace App\Http\Controllers;

use App\thread;
use Illuminate\Http\Request;


class ThreadController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */


     function construct(){
      //return $this->middleware('auth', ['except' => 'index']);
      return $this->middleware('auth')->except('index');

     }
    public function index()
    {
        //
        $threads=Thread::paginate(15);
        return view("threads.index",['threads'=>$threads]);
       //return view(view: 'pages.forum',compact( varname: 'threads'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("threads.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
            $this->validate($request,[

                    'subject'=>'required',
                    'type'=>'required',
                    'thread'=>'required'

            ]);
                auth()->user()->threads()->create($request->all());

            

            return  back()->withmessage('thread created');







    }

    /**
     * Display the specified resource.
     *
     * @param  \App\thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function show(thread $thread)
    {
        return view("threads.single",['threads'=>$thread]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(thread $thread)
    {
        //
        return view("threads.edit",['threads'=>$thread]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, thread $thread)
    {
        //
        if(auth()->user()->id !==$thread->user_id){
            abort( 401,  "unauthorized");

        }

        
        $this->validate($request,[

            'subject'=>'required',
            'type'=>'required',
            'thread'=>'required'

    ]);

            $thread->update($request->all());

            return redirect()->route('thread.show',$thread->id)->withmessge('Thread updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy(thread $thread)
    {
        //

        if(auth()->user()->id !==$thread->user_id){
            abort( 401,  "unauthorized");

        }

        $thread->delete();
        return redirect()->route('thread.index')->withmessge('Thread Deleted');

    }
}
