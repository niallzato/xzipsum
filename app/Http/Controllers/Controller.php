<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;



class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function postForm(){
    	//dd(\Request::all());
    	$request = \Request::all();
        $validator = \Validator::make($request, [
            'capital' => 'required|numeric',
            'lower' => 'required|numeric',
            'paragraphs' => 'required|numeric',
        ]);

        if ($validator->fails()) {
          dd($validator->errors());
        }
        else{
        	if ($request['capital'] == 1) {
        		$case = 'upper';
        	}
        	elseif ($request['lower'] == 1) {
        		$case = 'lower';
        	}
        	else{
        		$case = 'sentence';
        	}

        	$random = $this->getText($request['paragraphs'],$case);

            //\Request::session()->put('text',$random);

        	return view('main', ['lorem' => $random]);
        }

    }

    private function getText($para, $case){
    	$words = array("lorem", "ipsum", "dolor", "sit", "amet", "consectetuer",
        "adipiscing", "elit", "sed", "diam", "nonummy", "nibh", "euismod",
        "tincidunt", "ut", "laoreet", "dolore", "magna", "aliquam", "erat");

        $max = count($words) -1;

        $prev = null;
        $final=null;

        for ($i=0; $i < $para ; $i++) { 
        	$final = "<p>".$final;
        		for ($j=0; $j < 30; $j++) { 
        			$rand = $this->random($max,$prev);
        			$prev= $rand;
        			$selected = $words[$rand];
        			$final = $final." ".$selected;
        		}
        	$final = $final.".</p>";
        }
        return $final;
    }

    private function random($max,$prev){
		$rand = rand(0, $max);

		if ($rand === $prev) {
			return $this->random($max,$prev);
		}
		else{
			//dd($max,$prev,$rand);
			return $rand;
		}
    }

}
