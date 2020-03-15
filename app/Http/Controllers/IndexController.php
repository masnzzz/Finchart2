<?php

namespace App\Http\Controllers;

use App\Company;
use App\FinancialStatement;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // 全ての会社を取得する
        $companies = Company::all();

        // 全ての財務諸表を取得する
        $fstatements = FinancialStatement::all();

        return view('index', [
            'companies' => $companies,
            'fstatements' => $fstatements,
        ]);
    }
}
