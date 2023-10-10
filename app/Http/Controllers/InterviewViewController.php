<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class InterviewViewController extends Controller
{

 public function answer1details(Request $request){
	$d = $request->all();
        return view('view-answer1details',compact('d'));
        }
function getMax($array)
{
$n = count($array);
$max = $array[0];
for ($i = 1; $i < $n; $i++)
        if ($max < $array[$i])
                $max = $array[$i];
        return $max;
}

// Returns maximum in array
function getMin($array)
{
$n = count($array);
$min = $array[0];
for ($i = 1; $i < $n; $i++)
        if ($min > $array[$i])
                $min = $array[$i];
        return $min;
}
 public function answer2details(){
        $universitymasterfinal=  new Collection([
    		0, 1, 2, 3, 4, 5
	]);

        $universityeclistfinal =  new Collection([

    		0, 1, 2, 3, 4, 5

	]);

        return view('view-answer2details',compact('universitymasterfinal','universityeclistfinal' ));
        }
 public function answer3details(){
        $universitymasterfinal=  new Collection([
    		0, 1, 2, 3, 4, 5
	]);

        $universityeclistfinal =  new Collection([

    		0, 1, 2, 3, 4, 5

	]);

        return view('view-answer3details',compact('universitymasterfinal','universityeclistfinal' ));
        }
 public function answer4details(){
        $universitymasterfinal=  new Collection([
    		0, 1, 2, 3, 4, 5
	]);

        $universityeclistfinal =  new Collection([

    		0, 1, 2, 3, 4, 5

	]);

        return view('view-answer4details',compact('universitymasterfinal','universityeclistfinal' ));
        }
 public function answer5details(){
        $universitymasterfinal=  new Collection([
    		0, 1, 2, 3, 4, 5
	]);

        $universityeclistfinal =  new Collection([

    		0, 1, 2, 3, 4, 5

	]);

        return view('view-answer5details',compact('universitymasterfinal','universityeclistfinal' ));
        }
}
