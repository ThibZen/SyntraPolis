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
        /** deze geeft de movies weer gesorteerd op release date van klein naar groot */

        $movies = movie::all()->sortBy('ReleaseDate');
        dd($movies[0]);

        return view('layouts.home')
            ->with('movies', $movies);
    }

    /**
     *
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function upcoming() {
        $movies = movie::all();

        return view('layouts.upcoming');
    }

    /**
     *
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function schedule() {
        return view('layouts.schedule');
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
    public function profile() {
        return view('layouts.profile');
    }

    /**
     *
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login() {
        return view('auth.login');
    }

}
