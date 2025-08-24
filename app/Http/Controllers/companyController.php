<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class companyController extends Controller
{
 public function companyProfile($name, $email = "talha@gmail.com"){
    $id =4;
    $html = '';
    $html .= '<a href="'.$id.'" style="color:red">Put the content here</a>';

    return response($html);
}


}
