<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manufacturer;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manufacturers = manufacturer::all();
        return view('manufacturers', compact('manufacturers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manufacturers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            
            'company_name' => 'required',
            'tech_email' => 'required',
            'sales_email' => 'required',            
       ]);

       $manufacturer = manufacturer::create([ 
        
        'company_name' => $request->company_name,
        'sales_email' => $request->sales_email,
        'tech_email' => $request->tech_email,
       
        ]);
        
        return $this->index();



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $manufacturer = manufacturer::find($id); 
        return view('manufacturers.show',compact('manufacturer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $manufacturer = manufacturer::find($id);
        return view('manufacturers.edit', compact('manufacturer'));
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
        $validated = $request->validate([ 
            'company_name' => 'required',  
            'sales_email' => 'required', 
            'tech_email' => 'required',
            
       ]);

       $response = manufacturer::where('id', $id)->update([  
            
            'company_name' => $request->company_name,       
            'sales_email' => $request->sales_email,
            'tech_email' => $request->tech_email,
            
       ]);

       return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
