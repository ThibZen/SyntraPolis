<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\movie;

class DBController extends Controller
{

    public function showData()
    {
       $data = movie::all();
       return view('includes.showdata')->with('data',$data);
    }

    function editData($MovieID)
    {
        $movie = movie::find($MovieID);
        if($movie) {
            return view('includes.editdata')->with('movie',$movie);

        }else{
           $movie = movie::all();
            return view('includes.showdata')->with('movie',$movie);

        }
    }

    function updateData(Request $req, movie $movie)
    {
        $movie->Title = $req->input('title');
        $movie->DescriptionShort = $req->input ('short_descr');
        $movie->DescriptionLong =  $req->input('long_descr');
        $movie->Runtime = $req->input ('runtime');
        $movie->ReleaseDate = $req->input ('release_date');
        $movie->Foto = $req->input ('poster');
        $movie->Status = $req->input ('status');
        $movie->IMDBLink = $req->input ('imdb');

        $movie->save();
        return redirect()->route('data');
    }

    function deleteData($MovieID)
    {
        DB::table('movie')->where('id',$MovieID)->delete();
        return redirect()->route('data');
    }

    function record_exists_movie ($table, $column, $value)
    {
        $result = DB::select("SELECT * FROM {$table} WHERE {$column} = '$value'");
        if(sizeof($result) == 0) {
            return false;
        } else {
            $output = " Movie's already in there";
            echo $output;
            return true;
        }
    }

    function record_exists_names ($table, $value)
    {
//        $result = DB::select("SELECT * FROM {$table} WHERE",DB::raw("CONCAT(FirstName,' ',LastName) LIKE '%$value%'"))->fetch_all()[0];
        $result = DB::table('$table')
            ->select('*')
            ->where(DB::raw("CONCAT(FirstName,' ',LastName)", '=',  '%$value%'));
//        $result1 = $result->fetch_all()[0];
        if(sizeof($result->bindings["select"]) == 0) {
            return false;
        } else {
            return true;
        }
    }

    function actorInsert(Request $req)
    {   $actorfirst  = $req->input ('actor_first');
        $actorlast  = $req->input ('actor_last');
        $actorfull = $actorfirst . ' ' . $actorlast;
        if ($this->record_exists_names('actor', $actorfull) == false) {
            $sqlActor = "INSERT INTO actor (FirstName, LastName) VALUES ('$actorfirst','$actorlast')";
            if(DB::insert($sqlActor)){
                echo " Actor records added successfully.";
                $actor_id = DB::getPdo()->lastInsertId();;
            } else {
                echo "ERROR: Could not able to execute $sqlActor. " . sqlite_last_error();
            }
        } else {
            //RECORD EXISTS
            $result = (DB::select("ActorID FROM actor WHERE",DB::raw(" CONCAT(FirstName,' ',LastName) LIKE '%$actorfull%'")))->fetch_all()[0];
            $actor_id = $result[0];
        }
        return $actor_id;
    }

    function directorInsert(Request $req)
    {
        $directorfirst = $req->input ('director_first');
        $directorlast = $req->input ('director_last');
        $directorfull = $directorfirst . ' ' . $directorlast;
        if ($this->record_exists_names('director', $directorfull) == false) {
            //RECORD DOESNT EXIST
                $sqlDirector = "INSERT INTO director (FirstName, LastName) VALUES ('$directorfirst','$directorlast')";
            if (DB::insert($sqlDirector)){
                echo "Director records added successfully.";
                $director_id = DB::getPdo()->lastInsertId();
            } else {
                echo "ERROR: Could not able to execute $sqlDirector. " . sqlite_last_error();
            }
        } else {
            //RECORD EXISTS
            $result = (DB::select("DirectorID FROM director WHERE", DB::raw("CONCAT(FirstName,' ',LastName) LIKE '%$directorfull%'")))->fetch_all()[0];
            $director_id = $result[0];
        }
        return $director_id;
    }

    //Inserts
    function movieActorsInsert($movie_id,$actor_id)
    {
        $sql = "INSERT INTO movieactors (MovieID, ActorID) VALUES (" . $movie_id . "," . $actor_id . ")";
        if (DB::insert($sql)){
            echo " tussentabel actors gelukt";
        } else {
            echo "ERROR: Could not able to execute $sql. " . sqlite_last_error();
        }
    }

    function movieDirectorsInsert($movie_id,$director_id)
    {
        $sql = "INSERT INTO moviedirectors (MovieID, DirectorID) VALUES (" . $movie_id . "," . $director_id . ")";
        if (DB::insert($sql)){
            echo " tussentabel directors gelukt";
        } else {
            echo "ERROR: Could not able to execute $sql. " . sqlite_last_error();
        }
    }

    function movieGenreInsert(Request $req, $movie_id)
    {
        $genre = $req->input ('genre');
        $sql = "INSERT INTO moviegenre (MovieID, GenreID) VALUES (" . $movie_id . "," . $genre . ")";
        if (DB::insert($sql)){
            echo " tussentabel genre gelukt";
        } else {
            echo "ERROR: Could not able to execute $sql. " . sqlite_last_error();
        }
    }

    function moviePegiInsert(Request $req, $movie_id)
    {
        $pegi = $req->input ('pegi');
        $sql = "INSERT INTO moviepegi (MovieID, PegiID) VALUES (" . $movie_id . "," . $pegi . ")";
        if (DB::insert($sql)){
            echo " tussentabel pegi gelukt";
        } else {
            echo "ERROR: Could not able to execute $sql. " . sqlite_last_error();
        }
    }

    function insert(Request $req)
    {
        $movie_title = $req->input('movie_title');
        $short_descr = $req->input ('short_descr');
        $long_descr =  $req->input('long_descr');
        $runtime = $req->input ('runtime');
        $releasedate = $req->input ('release_date');
        $poster = $req->input ('poster');
        $status = $req->input ('status');
        $imdb = $req->input ('imdb');


        if ($this->record_exists_movie('movie','Title',$movie_title) == true)
        {
            //already in DB
        }else{
            $sqlMovie = "INSERT INTO movie (Title, DescriptionShort, DescriptionLong, Runtime, ReleaseDate, Foto, Status, IMDBLink )
            VALUES ('$movie_title','$short_descr','$long_descr','$runtime','$releasedate','$poster','$status','$imdb')";
            if(DB::insert($sqlMovie)){
                echo "Movie records added successfully.";
                $movie_id = DB::getPdo()->lastInsertId();
                $actor_id = $this->actorInsert($req);
                $director_id = $this->directorInsert($req);
                $this->movieActorsInsert($movie_id,$actor_id);
                $this->movieDirectorsInsert($movie_id,$director_id);
                $this->movieGenreInsert($req, $movie_id);
                $this->moviePegiInsert($req, $movie_id);
                return redirect()->route('data');
            } else{
                echo "ERROR: Could not able to execute $sqlMovie. " . sqlite_last_error();
            }
        }

//        function datePicker
//        {
//            DB::select()
//        }


    }
}