<?php

namespace App\Http\Controllers;

use App\Models\Bab;
use App\Models\DetailKemajuan;
use App\Models\Kemajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailKemajuanController extends Controller
{
    public function index()
    {
        $data['detailKemajuans'] = DetailKemajuan::all();
        return view('dashboard.detailKemajuan', $data);
    }

    public function showFormTambah()
    {
        $data['kemajuans'] = Kemajuan::all();
        $data['babs'] = Bab::all();

        return view('dashboard.tambahDetailKemajuan', $data);
    }

    public function tambah(Request $request)
    {
        $validation = $request->validate([
            "id_kemajuan" => ["required"],
            "id_bab" => ["required"],
            "keterangan" => ["required"],
        ]);

        DB::beginTransaction();
        try {
            DetailKemajuan::create($validation);
            DB::commit();

            return redirect("/dashboard/detailKemajuan");
        } catch (QueryException $err) {
            DB::rollback();
            dd($err->errorInfo);
        }
    }

    public function showFormUpdate($id)
    {
        $data['kemajuans'] = Kemajuan::all();
        $data['babs'] = Bab::all();
        $data['detailKemajuan'] = DetailKemajuan::where('id_detail_kemajuan', $id)->first();
        if ($data['detailKemajuan'] == null) {
            return redirect("dashboard/detailKemajuan");
        }

        return view("dashboard/updateDetailKemajuan", $data);
    }
}
