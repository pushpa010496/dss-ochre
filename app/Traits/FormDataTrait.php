<?php
namespace App\Traits;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

trait FormDataTrait
{
    public function getFormDataCountsPlant()
    {
        $response = Http::get('http://www.plantautomation-technology.com/api/form-data');
        if ($response->successful()) {
            $result = $response->json();
        } else {
            dd('API request failed');
        }
       // dd($formData);
      return $result;
    }

    public function getFormDataCountsAutomotive()
    {
        $response = Http::get('https://www.automotive-technology.com/api/form-data');
        if ($response->successful()) {
            $result = $response->json();
        } else {
            dd('API request failed');
        }
       // dd($formData);
      return $result;
    }
    public function getFormDataCountsPackage()
    {
        $response = Http::get('https://www.packaging-labelling.com/api/form-data');
        if ($response->successful()) {
            $result = $response->json();
        } else {
            dd('API request failed');
        }
       // dd($formData);
      return $result;
    }

    public function getFormDataCountsDefence()
    {
        $response = Http::get('https://www.defence-industries.com/api/form-data');
        if ($response->successful()) {
            $result = $response->json();
        } else {
            dd('API request failed');
        }
       // dd($formData);
      return $result;
    }
    public function getFormDataCountsHospitals()
    {
        $response = Http::get('https://www.hospitals-management.com/api/form-data');
        if ($response->successful()) {
            $result = $response->json();
        } else {
            dd('API request failed');
        }
       // dd($formData);
      return $result;
    }
    public function getFormDataCountsPharmatech()
    {
        $response = Http::get('https://www.pharmaceutical-tech.com/api/form-data');
        if ($response->successful()) {
            $result = $response->json();
        } else {
            dd('API request failed');
        }
       // dd($formData);
      return $result;
    }
    public function getFormDataCountsSteel()
    {
        $response = Http::get('https://www.steel-technology.com/api/form-data');
        if ($response->successful()) {
            $result = $response->json();
        } else {
            dd('API request failed');
        }
       // dd($formData);
      return $result;
    }

    public function getFormDataCountsPlastic()
    {
        $response = Http::get('https://www.plastics-technology.com/api/form-data');
        if ($response->successful()) {
            $result = $response->json();
        } else {
            dd('API request failed');
        }
       // dd($formData);
      return $result;
    }
    public function getFormDataCountsPulp()
    {
        $response = Http::get('https://www.pulpandpaper-technology.com/api/form-data');
        if ($response->successful()) {
            $result = $response->json();
        } else {
            dd('API request failed');
        }
       // dd($formData);
      return $result;
    }
    public function getFormDataCountsSports()
    {
        $response = Http::get('https://www.sportsvenue-technology.com/api/form-data');
        if ($response->successful()) {
            $result = $response->json();
        } else {
            dd('API request failed');
        }
       // dd($formData);
      return $result;
    }
 
    public function getFormDataCountsAsianhhm(){
        $response = Http::get('https://www.asianhhm.com/api/download-data');
        if ($response->successful()) {
            $result = $response->json();
        } else {
            dd('API request failed');
        }
       // dd($formData);
      return $result;
    }
    
    public function getFormDataCountsAmericanhhm(){
        $response = Http::get('https://www.americanhhm.com/api/download-data');
        if ($response->successful()) {
            $result = $response->json();
        } else {
            dd('API request failed');
        }
       // dd($formData);
      return $result;
    }
    
    public function getFormDataCountsEuropeanhhm(){
        $response = Http::get('https://www.europeanhhm.com/api/download-data');
        if ($response->successful()) {
            $result = $response->json();
        } else {
            dd('API request failed');
        }
       // dd($formData);
      return $result;
    }
    public function getFormDataCountsPFA(){
        $response = Http::get('https://www.pharmafocusasia.com/api/download-data');
        if ($response->successful()) {
            $result = $response->json();
        } else {
            dd('API request failed');
        }
       // dd($formData);
      return $result;
    }
    public function getFormDataCountsPFAmerica(){
        $response = Http::get('https://www.pharmafocusamerica.com/api/download-data');
        if ($response->successful()) {
            $result = $response->json();
        } else {
            dd('API request failed');
        }
       // dd($formData);
      return $result;
    }
    public function getFormDataCountsPFE(){
        $response = Http::get('https://www.pharmafocuseurope.com/api/download-data');
        if ($response->successful()) {
            $result = $response->json();
        } else {
            dd('API request failed');
        }
       // dd($formData);
      return $result;
    }
}