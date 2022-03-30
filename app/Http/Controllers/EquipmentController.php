<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipments;
use App\Models\Customer;
use App\Models\manufacturer;

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
        $manufacturers = manufacturer::all();
        $customers = Customer::all();
        return view('equipments',compact('equipments', 'manufacturers', 'customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manufacturers = manufacturer::all();
        $customers = Customer::all();
        return view('equipments.create', compact('manufacturers', 'customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->equipment_name == "0")
            $request->equipment_name = "Desktop";
        else if($request->equipment_name == "1")
            $request->equipment_name = "Laptop";
        else if($request->equipment_name == "2")
            $request->equipment_name = "Tablet";
        else if($request->equipment_name == "3")
            $request->equipment_name = "Phone";

        $validated = $request->validate([
            'customer_id' => 'required',
            'manufacturer_id' => 'required',
            'invoice' => 'required', 
            'equipment_name' => 'required',
            'purchaseDate' => 'required',
            'cpu' => 'required',
            'price' => 'required',
            'ram' => 'required',
            'storage' => 'required',
            'notes'=>'required',

       ]);

       $equipment = Equipments::create([ 
        'customer_id' => $request->customer_id,
        'manufacturer_id' => $request->manufacturer_id,
        'invoice' => $request->invoice,
        'equipment_name' => $request->equipment_name,
        'cpu' => $request->cpu,
        'price' => $request->price,
        'purchaseDate' => $request->date('purchaseDate'),
        'ram' => $request->ram,
        'storage' => $request->storage,
        'notes'=>$request->notes,
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
        $equipment = Equipments::find($id);
        
        return view('equipments.show', compact('equipment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $manufacturers = manufacturer::all();
        $customers = Customer::all();
        $equipment = Equipments::find($id);
        return view('equipments.edit', compact('equipment', 'manufacturers', 'customers'));
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
         if($request->equipment_name == "0")
         $request->equipment_name = "Desktop";
      else if($request->equipment_name == "1")
         $request->equipment_name = "Laptop";
      else if($request->equipment_name == "2")
         $request->equipment_name = "Tablet";
      else if($request->equipment_name == "3")
         $request->equipment_name = "Phone";
      
      $validated = $request->validate([
         'customer_id' => 'required',
         'manufacturer_id' => 'required',
         'invoice' => 'required', 
         'equipment_name' => 'required',
         'purchaseDate' => 'required',
         'cpu' => 'required',
         'price' => 'required',
         'ram' => 'required',
         'storage' => 'required',
         'notes' => 'required',

       ]);

       $response = Equipments::where('id', $id)->update([
            'customer_id' => $request->customer_id,
            'manufacturer_id' => $request->manufacturer_id,
            'invoice' => $request->invoice,
            'equipment_name' => $request->equipment_name,
            'purchaseDate' => $request->date('purchaseDate'),
            'cpu' => $request->cpu,
            'price' => $request->price,
            'ram' => $request->ram,
            'storage' => $request->storage,
            'notes' => $request->notes,
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
        $response = Equipments::where('id', $id)->delete();
        return $this->index();
    }
}
