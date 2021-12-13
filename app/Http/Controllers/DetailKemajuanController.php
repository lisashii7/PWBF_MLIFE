<?php

namespace App\Http\Controllers;

use App\Models\Bab;
use App\Models\DetailKemajuan;
use App\Models\Kemajuan;
use Illuminate\Http\Request;

class DetailKemajuanController extends Controller
{
    public function index() {
        $data['detailKemajuans'] = DetailKemajuan::all();
        return view('dashboard.detailKemajuan', $data);
    }

    public function showFormTambah()
    {
        $data['kemajuans'] = Kemajuan::all();
        $data['babs'] = Bab::all();

        return view('dashboard.tambahDetailKemajuan', $data);
    }
}
