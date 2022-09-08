<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\CareerApplication;
use Illuminate\Http\Request;

class careerController extends Controller
{
    /**
     * Display a listing of the career in admin panel.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = Career::all();
    

        return view('career.careerList',compact('careers'));
    }

    /**
     * Show the form for creating a new Career.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('career.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate data
        $validated = $request->validate([
            'job_title' => 'required|string|max:255',
            'num_available' => 'required',
        ]);

        $career = Career::create($validated);

        // return to create page
        return redirect()->route('career.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find career
        $career = Career::findOrFail($id);

        //return edit view
        return view('career.edit',compact('career'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

    {
        //validate request
        $validated = $request->validate([
            'job_title' => 'required|string|max:255',
            'num_available' => 'required',
        ]);

        //find career to be edited
        $career = Career::findOrFail($id);

        $editCareer=$career->update($validated);

        return redirect()->route('career.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
         Career::findOrFail($id)->delete();

        return redirect()->route('career.index');

    }
}
