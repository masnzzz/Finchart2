<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Company extends Model
{
    public function getList() {
        $fstatement_list = DB::table('financial_statements')
                      ->select('financial_statements.*')
                      ->orderBy('financial_statements.company_id', 'DESC');
        return $fstatement_list;
    }
}
