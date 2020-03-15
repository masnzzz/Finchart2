<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $company = new Company();
        $fstatement_list = $company->getList();
        return view('index', ['fstatement_list' => $fstatement_list]);
    }
}
