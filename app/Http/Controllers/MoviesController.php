<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use Illuminate\Http\Request;
use App\Models\Movie;
use Carbon\Carbon;
use App\Http\Services\MovieService;



class MoviesController extends Controller
{
    public function __construct(MovieService $movieService){
        $this->movieService = $movieService;
     
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // bez servisa

        // if ($request->input('title')){

        //     $filter = $request->input('title');
        //     $movies = Movie::where('title',$filter)->get();
        //     return $movies;
        // } else {
        //     return Movie::all();
        // }

        // sa servisom
        return  $this->movieService->search($request);

        
    }

    /**
     * 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieRequest $request)
    {
        info($request);
      $data = $request->validated(); 
      
      return Movie::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Movie::find($id);
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MovieRequest $request, $id)
    {
        info($request);
        $data = $request->validated();
        
        
        return Movie::where('id',$id)->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Movie::where('id',$id)->delete();
    }
}
