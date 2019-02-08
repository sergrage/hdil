<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Skill;

class SkillsAutocompleteController extends Controller
{
    public function skillsAutocomplete(Request $request)
    {
    	$output = '';
    	// $query = "SELECT * FROM skill WHERE skill LIKE '%".$request->query."%'";
    	$result = Skill::where('skill', 'LIKE', '%'.$request->get('query').'%')->get();
        dd($result);
    	// $rawQuery2 = "WHERE skill LIKE '%".$request->query."%'";

    	// $result = DB::table('skill')
     //            ->selectRaw($rawQuery2)
     //            ->get();
     //    $output = '<ul class="list-unstyles">';
     //    dd($result);

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