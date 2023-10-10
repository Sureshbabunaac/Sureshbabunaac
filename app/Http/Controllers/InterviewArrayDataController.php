<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InterviewArrayData;

class InterviewArrayDataController extends Controller
{
 	public function create()
        {
         Interview-arrayData::create([
         'random_list' => [1,2,3],
         ]);
         return 'done';
        }
        public function index()
        {
          $data = Interview-arrayData::find(1);
          dd($data->random_list);
        }
}
