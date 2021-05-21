<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=services::paginate(10);

        return view('services.index',compact('services'));

    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        services::create($request->all());
        return redirect('/services');
    }

    /**
     * Display the specified resource.
     * @param int  $id
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $services=services::findOrFail($id);
        return view('services.show',compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int  $id
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services=services::findOrFail($id);
        
        return view('services.edit',compact('services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *  @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $services=services::findOrFail($id);
        $services->update($request->all());
        return view('services.show',compact('services'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services=services::findOrFail($id);
        $services->delete();
        return redirect('/services');
    }


}
