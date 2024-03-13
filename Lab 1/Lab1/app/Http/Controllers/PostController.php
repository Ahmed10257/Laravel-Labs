<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
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
    {   if(is_numeric($id) && $id > 0)
        return view('show', ['id' => $id]);
        else
        return view('notfound');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   if(is_numeric($id) && $id > 0)
        return view('edit', ['id' => $id]);
        else
        return view('notfound');
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
}
