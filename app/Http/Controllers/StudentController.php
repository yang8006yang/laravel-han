<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[
            ['name'=>"HAN",
            'age'=>"18"],
            ['name'=>"AMY",
            'age'=>"20"],
            ['name'=>"NOAH",
            'age'=>"22"]
        ];
        return view('students.index',["data"=>$data,'name'=>'name']);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    /**
     * 自訂
     */
    public function excel()
    {
        dd("hello excel");
    }

    public function childPage()
    {
        return view('child');
    }
}


