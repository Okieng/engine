<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembayaran;
use App\User;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembayaran = Pembayaran::all();
        return view('pembayaran.index', ['pembayaran' => $pembayaran ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $user = User::all();
          $pembayaran = Pembayaran::all();
         return view('pembayaran.create', compact(['pembayaran', $pembayaran], ['user', $user]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'siswa_id' => 'required',
        'kelas' => 'required',
        'checklist' => 'required',
        'bln_pembayaran' => 'required',
        'tgl_pembayaran' => 'required',
        'tipe_pembayaran' => 'required',
    ]);
        $pembayaran = new Pembayaran;

        $pembayaran->siswa_id = $request->siswa_id;
        $pembayaran->kelas = $request->kelas;
        $pembayaran->checklist = $request->checklist;
        $pembayaran->bln_pembayaran = $request->bln_pembayaran;
        $pembayaran->tgl_pembayaran = date('Y-m-d', strtotime($request->tgl_pembayaran));
        $pembayaran->tipe_pembayaran = $request->tipe_pembayaran;


        $pembayaran->save();

        return redirect('pembayaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembayaran = Pembayaran::find($id);
        return view('pembayaran.detail',compact('pembayaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user = User::all();
         $pembayaran = Pembayaran::find($id);
        
            
        if(!$pembayaran){
            abort(503);
        }
        
        
         return view('pembayaran.edit',compact(['pembayaran'],['user']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request, [
        'siswa_id' => 'required',
        'kelas' => 'required',
        'checklist' => 'required',
        'bln_pembayaran' => 'required',
        'tgl_pembayaran' => 'required',
        'tipe_pembayaran' => 'required',
    ]);
        $pembayaran = Pembayaran::find($id);

        $pembayaran->siswa_id = $request->siswa_id;
        $pembayaran->kelas = $request->kelas;
        $pembayaran->checklist = $request->checklist;
        $pembayaran->bln_pembayaran = $request->bln_pembayaran;
        $pembayaran->tgl_pembayaran = date('Y-m-d', strtotime($request->tgl_pembayaran));
        $pembayaran->tipe_pembayaran = $request->tipe_pembayaran;


        $pembayaran->save();

        return redirect('pembayaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembayaran = Pembayaran::find($id);
        $pembayaran->delete();
        return redirect('pembayaran');
    }
}
