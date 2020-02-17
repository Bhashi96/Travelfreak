<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\gudregisters;
use App\FeedbackGuide;
use App\GuideBooking;
class GuidesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guide = gudregisters::all();
        return view('includes.user_home.profile_container',compact('guide'));
        // return view('guides.index',compact('guide'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
         $guide = gudregisters::find($id);
        // $rate = FeedbackGuide::find($id);
         $rate = FeedbackGuide::where('guide_id', $id);
        // $rate = DB::table('feedback_guides')->where('guide_id', 'id');
        $id2 = Auth::user()->id;
        $booking = GuideBooking::where('guide_id', $id)
                                              ->where('tourist_id', $id2)->latest('created_at')->first();
        return view('pages.guide_profile',compact('guide','rate','booking'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
