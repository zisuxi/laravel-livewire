<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\{companyController};


class getCompanyController extends Controller
{
    public function showCompanyProfile(){
    $companyprofile = new companyController();
    return $companyprofile->companyProfile("Tanveer Ahmad", "ahmad@gmail.com");
}

}
