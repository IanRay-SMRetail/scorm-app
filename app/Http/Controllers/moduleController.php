<?php

namespace App\Http\Controllers;

use App\Models\Modules;
use Illuminate\Http\Request;

class moduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Modules $modules)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modules $modules)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Modules $modules)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modules $modules)
    {
        //
    }

    /**
     * Shows all core modules
     * thrown to users.module view
     */
    public function showCore(){
        $data = Modules::where('moduleid', '1')->paginate(10); //select records with a value of 1 in moduleid
        return view ('user.module',
                    ['data'=>$data,
                    'header'=>'Core Modules']);
    }

    public function showJob(){
        $data = Modules::where('moduleid', '2')->paginate(10); //select records with a value of 2 in moduleid
        return view ('user.module',
                    ['data'=>$data,
                    'header'=>'Job Based Modules']);
    }

    public function showLeadership(){
        $data = Modules::where('moduleid', '3')->paginate(10); //select records with a value of 3 in moduleid
        return view ('user.module',
                    ['data'=>$data,
                    'header'=>'Leadership Modules']);
    }
}
