<?php
/**
 * Created by PhpStorm.
 * User: de_ma
 * Date: 17/06/2019
 * Time: 10:20
 */
use DB;
use App\movie;

class functionsController extends Controller {

    function datePicker($day)
    {
        $pickedMovie = DB::table('screening')
            ->leftJoin('movie', 'screening.MovieID', '=', 'movie.id')
            ->distinct('movie.title')
            ->where('ScreeningDay', '=', '$day')
            ->get();
        return $pickedMovie;
    }
}