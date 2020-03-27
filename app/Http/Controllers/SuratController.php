<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\user;
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
        $allsurat = surat::all()->count();
        $archive = surat::where('status_surat', 1)->count();
        return view('user.information',['allsurat' => $allsurat],['archive' => $archive]);
    }

    public function editInformation()
    {
        return view('user.editinformation');
    }

    public function updateInformation(Request $request, $id)
    {
        //----------- Upload Gambar -----------
        $nem = Auth::user()->username;
        $ext = $request->file('image')->getClientOriginalExtension();
        $name = $nem.'.'.$ext;
        if (Storage::exists('public/avatars', $name)) {
           Storage::delete('public/avatars', $name);
           $image = $request->file('image')->storeAs('public/avatars', $name);
        }
        else{
            $image = $request->file('image')->storeAs('public/avatars', $name);
        }

        $user = user::find($id);
        $user->username = $request->input('username');
        $user->nip = $request->input('nip');
        $user->email = $request->input('email');
        $user->image = $name;

        $user->save();

        return redirect()->route('user.information');
    }

    public function task()
    {
        $surat = surat::where('status_surat', 0)->get();
        return view('surat.task',compact('surat'));
    }

    public function taskArchive()
    {
        $surat = surat::where('status_surat', 1)->get();
        return view('surat.archive',compact('surat'));
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

    public function Penerima($id){
        $user = user::all();
        $surat = surat::find($id);
        return view('surat.sendtask',compact('user','surat'));
    }

    public function storePenerima(Request $request, $id){
        $surat = surat::find($id);
        $surat->status_surat = '1';
        $surat->save();

        $users=$request->penerima;
        $surat->user()->sync($users);
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
