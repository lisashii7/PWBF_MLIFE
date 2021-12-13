<?php

namespace App\Http\Controllers;

use App\Models\Kemajuan;
use App\Models\Pengurus;
use App\Models\Santri;
use Illuminate\Http\Request;

class KemajuanController extends Controller
{
    public function index()
    {
        $data['kemajuans'] = Kemajuan::all();
        return view('dashboard.kemajuan', $data);
    }

    public function showFormTambah() {
        $data['santris'] = Santri::all();
        $data['pengurus'] = Pengurus::all();

        return view('dashboard.tambahKemajuan', $data);
    }
}
