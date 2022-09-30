<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Garasi;
use App\Models\Kendaraan;
use App\Models\Pemakaian;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PemakaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Pemakaian::where('status', 'accPengelola')->orderBy('waktu', 'desc')->get();
        if ($request->ajax()) {
            return DataTables::of($data)
                    ->addColumn('kendaraan', function($row){
                        return $row->kendaraan->nomor;
                    })
                    ->addColumn('pengelola', function($row){
                        return $row->user->name;
                    })
                    ->addColumn('garasi', function($row){
                        return $row->garasi->nama;
                    })
                    ->addColumn('action', function($row){
                            $btn = '<a id="delete-confirm" href="'.route("admin.pesanan.terima",$row["id"]).'" class="btn btn-success btn-sm">Terima</a> <a onclick="confirmDelete('.$row["id"].')" href="" data-toggle="modal" data-target="#Modal" class="btn btn-danger btn-sm" >Batalkan</a>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.pemesanan.index');
    }


    // Terima Pesanan
    public function terima($id)
    {
        $pemakaian = Pemakaian::find($id);
        $pemakaian->status = 'acc';
        $pemakaian->save();
        return redirect()->back()->with('success', 'Permintaan disetujui');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kendaraans = Kendaraan::all();
        $pengelolas = User::all();
        $garasis = Garasi::all();
        return view('admin.pemesanan.create', ['kendaraans'=>$kendaraans,'pengelolas' => $pengelolas, 'garasis' => $garasis]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kendaraan_id' => 'required',
            'garasi_id' => 'required',
            'user_id' => 'required',
            'driver' => 'required|min:2',
            'deskripsi' => 'required'
        ]);
        Pemakaian::create([
            'kendaraan_id' => $request->kendaraan_id,
            'garasi_id' => $request->garasi_id,
            'user_id' => $request->user_id,
            'driver' => $request->driver,
            'deskripsi' => $request->deskripsi,
            'status' => 'accAdmin'
        ]);
        return redirect()->route('admin.pesanan')->with('success', 'Permintaan telah dibuat');
    }

    public function destroy($id)
    {
        Pemakaian::find($id)->delete();
        return redirect()->back()->with('success', 'Permintaan dibatalkan');
    }
}
