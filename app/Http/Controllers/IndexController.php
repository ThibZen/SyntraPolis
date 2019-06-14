<?php

namespace App\Http\Controllers;

use App\genre;
use App\movie;
use App\Movies;
use App\movieactors;
use App\moviegenre;
use App\moviepegi;
use App\pricing;
use App\screening;
use Illuminate\Http\Request;

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
        //dd($filter);

        return view('layouts.home')
            ->with('filter', $filter);
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
    public function specificMovie()
    {
        $movies = movie::all();
        return view('layouts.specificmovie')
            ->with('movies', $movies);
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function admin(){
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
