<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     *
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home() {
        return view('layouts.home');
    }

    /**
     *
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function upcoming() {
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
