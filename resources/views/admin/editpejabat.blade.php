@extends('sbadmin::layouts.app')

@section('htmlheader_title')
	Edit Pejabat
@endsection

@section('main-content')
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      Edit Pejabat
    </div>
    <div class="card-body">
      <form action="{{url('admin/updatepejabat/'.$pejabat->id)}}" method="POST">
      <input type="hidden" name="_method" value="PUT">
      @csrf
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-8">
              <input type="hidden" class="form-control" id="id" name="id" value="{{$pejabat->id}}">
              <input type="text" class="form-control" id="pejabat" name="nama_pejabat" value="{{$pejabat->nama_pejabat}}" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">NIP</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nip" name="nip" value="{{$pejabat->nip}}" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{$pejabat->jabatan}}" autocomplete="off">
            </div>
          </div>
          <div class="form-group row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Edit</button>
                  <a href="javascript:history.go(-1)" class="btn btn-danger">Back</a>
            </div>
          </div>
        </form>      
    </div>
  </div>

</div>
@endsection
