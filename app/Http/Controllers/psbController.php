<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\psb;
use App\detailSiswa;
use DB;

class psbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psbs = psb::paginate(5);
        return view('psb.tabel_psb', compact('psbs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('psb.create_psb');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $psbs = new psb;
        $this->validate($request, [
                 'nama'=>'required|unique:psbs',
                 'no_induk'=>'required|unique:psbs',
                 'minat'=>'required',
                 'jenkel'=>'required',
                 'email'=>'required|unique:psbs',
                 'alamat'=>'required',
             ]);
        $psbs->nama = $request->nama;
        $psbs->no_induk = $request->no_induk;
        $psbs->minat = $request->minat;
        $psbs->jenkel = $request->jenkel;
        $psbs->email = $request->email;
        $psbs->alamat = $request->alamat;
        $psbs->save();

        $detail = new detailSiswa;
         $this->validate($request, [
                 'TTL'=>'required',
                 'asal_smp'=>'required',
                 'nm_ayah'=>'required|unique:detail_Siswas',
                 'nm_ibu'=>'required|unique:detail_Siswas',
             ]);
        $detail->nama = $request->nama;
        $detail->TTL = $request->TTL;
        $detail->asal_smp = $request->asal_smp;
        $detail->nm_ayah = $request->nm_ayah;
        $detail->nm_ibu = $request->nm_ibu;
        $detail->save();
        session()->flash('message', 'Tambah Siswa Berhasil');
        return redirect('psb');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = DB::table('psbs')
                ->join('detail_siswas', 'psbs.id', '=', 'detail_siswas.id')
                ->where('psbs.id', '=', $id)
                ->first();
                // dd($item);

        return view('psb.show_psb', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = DB::table('psbs')
                ->join('detail_siswas', 'psbs.id', '=', 'detail_siswas.id')
                ->where('psbs.id', '=', $id)
                ->first();
                // dd($item);
        return view('psb.edit_psb', compact('item'));
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
        //data1
        $psbs = psb::find($id);
        $this->validateInput($request);
        $input = [
                 'nama'     =>$request['nama'],
                 'no_induk' =>$request['no_induk'],
                 'minat'    =>$request['minat'],
                 'jenkel'   =>$request['jenkel'],
                 'email'    =>$request['email'],
                 'alamat'   =>$request['alamat'],
             ];

        DB::table('psbs')
            ->where('id',$id)
            ->update($input);
            // dd($input);

            //data 2
        $detail_siswas = detailSiswa::find($id);
        $this->validateInput($request);
        $inputdetail = [
            'nama'      =>$request['nama'],
            'TTL'       =>$request['TTL'],
            'asal_smp'  =>$request['asal_smp'],
            'nm_ayah'   =>$request['nm_ayah'],
            'nm_ibu'    =>$request['nm_ibu'],
             ];

        DB::table('detail_siswas')
            ->where('id',$id)
            ->update($inputdetail);
            // dd($inputdetail);

        //  $this->validate($request, [
        //          'nama'=>'required',
        //          'no_induk'=>'required',
        //          'minat'=>'required',
        //          'jenkel'=>'required',
        //          'email'=>'required',
        //          'alamat'=>'required',
        //      ]);
        // $item->nama = $request->nama;
        // $item->no_induk = $request->no_induk;
        // $item->TTL = $request->TTL;
        // $item->asal_smp = $request->asal_smp;
        // $item->nm_ayah = $request->nm_ayah;
        // $item->nm_ibu = $request->nm_ibu;
        // $item->minat = $request->minat;
        // $item->jenkel = $request->jenkel;
        // $item->email = $request->email;
        // $item->alamat = $request->alamat;
        // $item->save();

        session()->flash('message', 'Edit Siswa Berhasil');
        return redirect('/psb');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        psb::where('id', $id)
            ->delete();
        detailSiswa::where('id', $id)
            ->delete();
        session()->flash('message', 'Hapus Data Berhasil');
        return redirect('/psb');
    }
    private function validateInput($request)
    {
        $this->validate($request,[
            'nama'      =>'required',
            'no_induk'  =>'required',
            'minat'     =>'required',
            'jenkel'    =>'required',
            'email'     =>'required',
            'alamat'    =>'required',
            'TTL'       =>'required',
            'asal_smp'  =>'required',
            'nm_ayah'   =>'required',
            'nm_ibu'    =>'required',
            ]);
    }
}
