<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Pemakaian;
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
        $data = Pemakaian::where('status', false)->orderBy('waktu', 'desc')->get();
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
        $pemakaian->status = true;
        $pemakaian->save();
        return redirect()->back()->with('success', 'Pesanan diterima');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemakaian  $pemakaian
     * @return \Illuminate\Http\Response
     */
    public function show(Pemakaian $pemakaian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemakaian  $pemakaian
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemakaian $pemakaian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pemakaian  $pemakaian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemakaian $pemakaian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemakaian  $pemakaian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pemakaian::find($id)->delete();
        return redirect()->back()->with('success', 'Pesanan dibatalkan');
    }
}
