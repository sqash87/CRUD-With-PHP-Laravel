<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipments;
class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipments = Equipments::all();
        return view('equipments', compact('equipments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipments.create');
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
            'device_name' => 'required',
            'cpu' => 'required',
            'ram' => 'required',
            'storage' => 'required',
            'price' => 'required',
            'invoice'=> 'required',
            'purchaseDate' => 'required',
            
            
       ]);

       $equipment = Equipments::create([ 
           
            'device_name' => $request->device_name,
            'cpu' => $request->cpu,
            'ram' => $request->ram,
            'storage' => $request->storage, 
            'price' => $request->price,
            'invoice' => $request->invoice,
            'purchaseDate' => $request->date('purchaseDate'),    
            
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
        $equipment = Equipments::all();
        return view('equipments',compact('equipment'));
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
    public function update(Request $request, $id)
    {
        //
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
