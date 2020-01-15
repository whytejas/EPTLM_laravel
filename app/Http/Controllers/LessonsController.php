<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\LessonRequest;
use App\Lesson;
use App\Tag;
use App\User;
use App\Volunteer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;


class LessonsController extends Controller
{



    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {



        $lessons = Lesson::latest()->where('session_date', '>', Carbon::today()->toDateString())->orderBy('session_date')->get();
        $volunteers= Volunteer::pluck('firstname', 'lastname');
        return view('volunteer.classroom_signup')->with('lessons', $lessons)->with('volunteers', $volunteers);
    }


    public function show()
    {
        $volunteer =  Auth::guard('volunteer')->user();
        if ($volunteer->lessons()->exists()){

            $lessons = $volunteer->lessons()->where('session_date', '>', Carbon::today()->toDateString())->orderBy('session_date')->get();
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


            $lesson->updated_at = now();
            $lesson->save();
            $lesson->volunteers()->attach($volunteer);
        }


       return $this->index();
    }



    public function cancel($id){

        $volunteer =  Auth::guard('volunteer')->user();
        $volunteer->lessons()->detach($id);
        return $this->show();
    }




    public function create()
    {

        return view('volunteer.lessons.create');
    }




    public function store(LessonRequest $request)
    {


        $lesson = Lesson::create($request->all());
        $lesson->save();
        return $this->list();

    }

    /**
     * @param $id
     * @return string
     */
    public function edit($id)
    {

        $lesson = Lesson::find($id);
        return view('volunteer.lessons.edit', compact('lesson'));




    }


    public function update($id, LessonRequest $request)
    {

        $lesson = Lesson::find($id);
        $lesson->update($request->all());
        $lesson->save();
        return $this->list();
    }



    public function destroy($id){

        $lesson = Lesson::where('id', $id)->delete();

      return $this->list();


    }


    public function list()
    {
        $lessons = Lesson::latest()->where('session_date', '>', Carbon::today()->toDateString())->orderBy('session_date')->get();
        $volunteers= Volunteer::pluck('firstname', 'lastname');
        return view('volunteer.lessons.list')->with('lessons', $lessons)->with('volunteers', $volunteers);
    }




}
