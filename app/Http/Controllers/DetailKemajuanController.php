<?php

namespace App\Http\Controllers;

use App\Models\DetailKemajuan;
use Illuminate\Http\Request;

class DetailKemajuanController extends Controller
{
    public function index() {
        $data['detailKemajuans'] = DetailKemajuan::all();
        return view('dashboard.detailKemajuan', $data);
    }
}
