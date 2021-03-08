<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\People;

class MainController extends Controller
{
    function sayHi() {
        return view('info');
    }
    function welcome() {
        return view('welcome');
    }
    
    function features() {
        return view('features');
    }
    
    function contact() {
        return view('contact');
    }
    
    function allPeople() {
    //    return( DB::table('people')->where('id','>', 1)->limit(1)->get('name'));
       return( (array) DB::table('people')
                        ->where('id','>', 1)
                        ->first()
                        ->name
        );
    }

    function testModel() {
        // $people = People::all()->where('id','>',1)->displayNameAndEmail();
        // $people = People::where('id','>',1)->get()->displayNameAndEmail();
        // $people = People::where('id','>',1)->get();
        return $people;
    }

    function showPosts() {
        $person = People::find(1);
        $posts = $person->posts->count();
        return $posts;
    }


}
