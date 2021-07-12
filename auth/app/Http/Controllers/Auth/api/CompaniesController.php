<?php

namespace App\Http\Controllers\auth\api;

use App\Http\Controllers\auth\CompaniesController as AuthCompaniesController;
use App\Http\Controllers\Controller;
use App\Models\CompaniesModel;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $comchannuocmam = CompaniesModel::all();
        // dd($comchannuocmam);
        // $comchannuocmam = CompaniesModel::all();
       return CompaniesModel::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//insert
    {
        return CompaniesModel::create($request->all());
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $res,$id)
    {
        //
        $companiesModel = CompaniesModel::find($id);
       // $res->update($companiesModel);
        $companiesModel->update($res->all());
        return $companiesModel;
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
        $companiesModel = CompaniesModel::find($id);
        $companiesModel->delete();
        return $companiesModel;
    }


}
