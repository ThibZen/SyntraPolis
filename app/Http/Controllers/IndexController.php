<?php

namespace App\Http\Controllers;

use App\genre;
use App\movie;
use App\Movies;
use App\movieactor;
use App\moviegenre;
use App\moviepegi;
use App\pricing;
use App\screening;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller
{
    /**
     *
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home() {
        $movies = movie::all();
        $filter = $movies->sortByDesc('ReleaseDate')->take(8);
        //dd($movie);

        return view('layouts.home')
            ->with('filter', $filter)
            ->with('movie', $movies);
    }

    /**
     *
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function upcoming() {
        $movies = movie::all();
        $filter = $movies->sortByDesc('ReleaseDate')->take(3);

        return view('layouts.upcoming')
            ->with('filter', $filter);
    }

    /**
     *
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function schedule() {
        $movies = movie::all();
        $filter = $movies->sortByDesc('ReleaseDate')->take(8);


        return view('layouts.schedule')
            ->with('filter', $filter);
    }

    /**
     *
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about() {
        return view('layouts.about');
    }

    /**
     *
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact() {
        return view('layouts.contact');
    }

    /**
     *
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login() {
        return view('auth.login');
    }

    /**
     *
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function profile() {
        return view('layouts.profile');
    }

    /**
     *
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function specificMovie($MovieID)
    {
        $movie = movie::find($MovieID);

        //dd($movie);
        if($movie) {
            return view('layouts.specificmovie')->with('movie',$movie);

        }else{
            $movie = movie::all();
            return view('layouts.home')->with('movie',$movie);

        }
    }

    /**
     *
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function orderMovie($MovieID)
    {
        $movie = movie::find($MovieID);
        //dd($movie);

        if($movie) {
            return view('layouts.ordermovie')->with('movie', $movie);
        }
    }

    public function orderStore() {
        $input = Input::all();

        return view('layouts.orderConfirmed')
            ->with('input', $input);

    }

    public function orderConfirmed($input){
        $input = $input;
        return view('layouts.orderConfirmed')
            ->with('input', $input);
    }


        /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function admin()
    {
        return view('layouts.admin');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function insertForm(){
        return view('includes.insertform');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function modal(){
        return view('includes.modal');
    }


}
