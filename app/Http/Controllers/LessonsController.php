<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use App\Lesson;
use App\Tag;
use App\User;
use App\Volunteer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class LessonsController extends Controller
{
    //


    public function __construct()
    {
//        $this->middleware('auth', ['only' => ['create', 'edit', 'blogAdmin']]);
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {



        $lessons = Lesson::latest()->get();
//        $user = User::class;
        return view('volunteer.classroom_signup')->with('lessons', $lessons);
    }


    public function show()
    {
        $volunteer =  Auth::guard('volunteer')->user();
        if ($volunteer->lessons()->exists()){

            $lessons = $volunteer->lessons()->get();
            return view('volunteer.show', compact('lessons', 'volunteer'));
        }

        else {
            return $this->index();
        }



    }


    public function signUp($id) {


        $lesson = Lesson::find($id);
        $volunteer =  Auth::guard('volunteer')->user();

        if ($lesson->volunteers()->where('volunteer_id', $volunteer->id)->doesntExist()){

            $lesson->total_volunteers = $lesson->total_volunteers + 1;
            $lesson->updated_at = now();
            $lesson->save();
            $lesson->volunteers()->attach($volunteer);
        }


        $lessons = Lesson::latest()->get();
        $volunteers= Volunteer::pluck('firstname', 'lastname');

        return view('volunteer.classroom_signup')->with('volunteers', $volunteers)->with('lessons', $lessons);
    }



    public function cancel($id){

        $volunteer =  Auth::guard('volunteer')->user();
        $volunteer->lessons()->detach($id);
        return $this->show();
    }



}
