<?php

namespace App\Http\Controllers;

use App\listShops;
use Illuminate\Http\Request;

class ListShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = listShops::all();
        return $shops;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\listShops  $listShops
     * @return \Illuminate\Http\Response
     */
    public function show(listShops $listShops)
    {
        $shops = list_shops::find($id);
        //Return as a resource
        return $shops;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\listShops  $listShops
     * @return \Illuminate\Http\Response
     */
    public function edit(listShops $listShops)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\listShops  $listShops
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, listShops $listShops)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\listShops  $listShops
     * @return \Illuminate\Http\Response
     */
    public function destroy(listShops $listShops)
    {
        //
    }
}
