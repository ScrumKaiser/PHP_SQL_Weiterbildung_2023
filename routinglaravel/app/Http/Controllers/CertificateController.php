<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'CertificateController@index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'CertificateController@create';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'CertificateController@store';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'CertificateController@show id: ' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'CertificateController@edit id: ' . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'CertificateController@update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'CertificateController@destroy';
    }
}
