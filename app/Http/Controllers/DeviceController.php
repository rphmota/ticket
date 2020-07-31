<?php

namespace App\Http\Controllers;

use App\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Device::latest()->paginate(5);
        return view('front.devices.index',compact('devices'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.devices.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Device::create([
            'name' => $request->name,
            'description' => $request->description,
            'tombo' => $request->tombo,
            'user_id'  => session('user_id') ?? null
        ]);
        return redirect()->route('devices.index')
            ->with('success','Equipamento inserido com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Device $device)
    {
        $usuarioInsert = $device->user()->get()->first();

        return view('front.devices.show',compact('device'))->with(['usuarioInsert' => $usuarioInsert]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $device)
    {

        return view('front.devices.edit',compact('device'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Device $device)
    {
        $device->update([
            'name' => $request->name,
            'description' => $request->description,
            'tombo' => $request->tombo,
            'user_id'  => session('user_id') ?? null
        ]);
        
        return redirect()->route('devices.index')
            ->with('success','Dispositivo Atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        $device->delete();
        return redirect()->route('devices.index')->with('success','Equipamento Deletado com sucesso');
    }
}
