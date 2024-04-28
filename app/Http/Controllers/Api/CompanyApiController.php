<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyApiController extends Controller
{
    //
    public function show(){
        $company = Company::find(1);
        return response(['company' => $company], 200);
    }
}
