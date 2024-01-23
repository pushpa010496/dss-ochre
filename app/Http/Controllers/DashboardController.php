<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Traits\FormDataTrait;

class DashboardController extends Controller
{

    use FormDataTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $typeCounts = $this->getFormDataCountsPlant();
        $typeCountsAutomotive = $this->getFormDataCountsAutomotive();
        $typeCountsPackage = $this->getFormDataCountsPackage();
        $typeCountsDefence = $this->getFormDataCountsDefence();
        $typeCountsHospitals = $this->getFormDataCountsHospitals();
        $typeCountsPharmatech = $this->getFormDataCountsPharmatech();
        $typeCountsSteel = $this->getFormDataCountsSteel();
        $typeCountsPlastic = $this->getFormDataCountsPlastic();
        $typeCountsPulp = $this->getFormDataCountsPulp();
       // dd($typeCountsPulp);
        $typeCountsSports = $this->getFormDataCountsSports();
        $typeCountsAsianhhm = $this->getFormDataCountsAsianhhm();
        $typeCountsAmericanhhm = $this->getFormDataCountsAmericanhhm();
        $typeCountsEuropeanhhm = $this->getFormDataCountsEuropeanhhm();
        $typeCountsPFA = $this->getFormDataCountsPFA();
        $typeCountsPFAmerica = $this->getFormDataCountsPFAmerica();
        $typeCountsPFE = $this->getFormDataCountsPFE();
        return view('dashboard', compact('typeCounts','typeCountsAutomotive','typeCountsPackage','typeCountsDefence','typeCountsHospitals','typeCountsPharmatech','typeCountsSteel','typeCountsPlastic','typeCountsPulp','typeCountsSports',
          'typeCountsAsianhhm','typeCountsAmericanhhm','typeCountsEuropeanhhm','typeCountsPFA','typeCountsPFAmerica','typeCountsPFE'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
