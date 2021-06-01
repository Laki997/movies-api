<?php

namespace App\Http\Services;
use App\Models\Movie;


class MovieService {

    public function search($request){
        
        if ($request->input('title')){
            
          return Movie::where('title',$request->input('title'))->get();
        } else {
            return Movie::all();
        }

      
        
    }
}



?>