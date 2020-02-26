<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\surat;
use App\opd;
Use Storage;
use Datetime;


class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function information()
    {
        return view('user.information');
    }

    public function task()
    {
        return view('surat.task');
    }

    public function storeTask(Request $request)
    {
        // $this->validate($request,[
        //     'pengirim' => 'required',
        //     'jenis_surat' => 'required',
        //     'no_surat' => 'required',
        //     'tgl_surat' => 'required',
        //     'perihal' => 'required',
        //     'desc' => 'required',
        //     'tgl_kirim' => 'required',
        //     'jam' => 'required',
        //     'file' => 'required',
        //     'status_surat' => 'required',

        // ]);
        
        $per = str_replace(' ','_',$request->perihal);
        $bln = date("F",strtotime($request->tgl_surat));
        $thn = date("Y",strtotime($request->tgl_surat));
        $ext = $request->file('file')->getClientOriginalExtension();
        $nem = $per .'_'. date("d_F_Y", time()).'.'.$ext;
        $path = $thn.'/'.$bln;
        if (!(Storage::exists($thn))){
            $makedir1 = Storage::makeDirectory($thn);
        }
        elseif(!(Storage::exists($thn.'/'.$bln))){
            $makedir1 = Storage::makeDirectory($thn.'/'.$bln);
        }
        
        $date = new DateTime();

        $surat = Surat::create([				
            'pengirim' =>$request->pengirim,
            'jenis_surat' => $request->jenis_surat,
            'no_surat' => $request->no_surat,
            'perihal' => $request->perihal,
            'desc' => $request->desc,
            'tgl_surat' => $request->tgl_surat,
            'jam' => $date->format('H:i:s'), 
            'tgl_kirim' => $date->format('Y-m-d'),
            'file_surat' => $request->file('file')->storeAs($path, $nem),
            'status_surat' => 0				
        ]);

        // $users=$request->penerima;
        // $surat->user()->sync($users);

        return redirect()->route('surat.task');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function archive()
    {
        return view('surat.archive');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
