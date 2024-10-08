<?php

namespace App\Http\Controllers;

use App\Models\rc;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
   
    $data =['efat','azizi', '12','google.com'];
    return view('slider',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return '<h1> hiii</1h>';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(rc $rc)
    {
        return '<h1> hq $id</1h>';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(rc $rc)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, rc $rc)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(rc $rc)
    {
      
    }
}
