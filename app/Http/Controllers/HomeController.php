<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DB;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function returnTags(){
        $data = DB::table('tags')->get();
        return view('film/filmCreate', ['data' => $data]);
    }

    public function processCreate(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'date' => 'required',
            'rating' => 'required',
            'ticketprice' => 'required',
            'genre' => 'required',
            'country' => 'required',
            'image' => 'required',
        ]);
        $data = $request->all();
        if (\File::copy($data['image']->getPathname(), 'images/' . $data['image']->getClientOriginalName())) {
            DB::table('films')->insert([
                [
                    'created_at' => date("Y-m-d H:i:s"),
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'country' => $data['country'],
                    'genre' => $data['genre'],
                    'release_date' => str_replace('/','-',$data['date']),
                    'rating' => $data['rating'],
                    'ticket_price' => $data['ticketprice'],
                    'photo' => $data['image']->getClientOriginalName(),
                ],
            ]);
        }
        return Redirect::back()->with('status', 'Film added!');
    }

    public function allFilms(){
        $data = DB::table('films')->get();
        foreach ($data as $k=>$v){
            $data[$k]->url = str_replace(' ', '-',$v->name);
        }
        return view('film.filmdet', ['data' => $data]);
    }
    public function titleFilm($slug){
        $data = DB::table('films')->where([['name','=',str_replace('-',' ',$slug)]])->get();
        $comments = DB::table('comments')->where([['id_post','=',$data[0]->id]])->get();
        $data[0]->comments = $comments;
        return view('film.filmSlug', ['data' => $data]);
    }

    public function saveComment(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'comment' => 'required',
        ]);
        $data = $request->all();
            DB::table('comments')->insert([
                [
                    'id_post' => $data['id_film'],
                    'name' => $data['name'],
                    'comment' => $data['comment'],
                    'date' => date("Y-m-d H:i:s"),
                ],
            ]);

        return Redirect::back()->with('status', 'Comment added!');
    }


}
