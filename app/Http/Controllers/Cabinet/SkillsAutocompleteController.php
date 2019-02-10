<?php

namespace App\Http\Controllers\Cabinet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Skill;

class SkillsAutocompleteController extends Controller
{
    public function skillsAutocomplete(Request $request)
    {
    	$output = '';
    	$result = Skill::where('skill', 'LIKE', '%'.$request->get('query').'%')->get();

        $output = '<ul class="list-group">';

        if($result->isNotEmpty()){

           $result->each(function ($item, $key) use (&$output) {
              $output .= '<li class="list-group-item">'. ' ' .$item->skill.'</li>';

           });
           
        }
        $output .= '</ul>';
        echo $output;

    }
}


// Facing the same problem today, you can do

// ```
// $query = User::where('name', 'LIKE', "%$term%");
// dd($query->toSql(), $query->getBindings());

// // toSql() print
// "select * from `Users` where `name` LIKE ?"
// // getBindings() print
// array:1 [▼
//   0 => "%yourterm%"
// ]
// ```