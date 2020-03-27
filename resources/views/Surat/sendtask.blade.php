@extends('sbadmin::layouts.app')

@section('htmlheader_title')
	Kirim Surat
@endsection

@section('main-content')
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      Kirim Surat
    </div>
    <div class="card-body">
      <form action="{{url('surat/sendpenerima/'.$surat->id)}}" method="POST">
      <input type="hidden" name="_method" value="PUT">
      @csrf
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="disabledTextInput" name="id" value="{{$surat->id}}" disabled autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Perihal</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="perihal" name="perihal" value="{{$surat->perihal}}" disabled autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Penerima</label>
            <div class="col-sm-8">
            <select class="form-control @error('penerima') is-invalid @enderror select2" name="penerima[]"  multiple="multiple" style="width: 100%;">
                      @foreach($user as $data)
                       <option value="{{ $data->id }}">{{ $data->username }}</option>
                      @endforeach
                    </select>
            </div>
          </div>
          <div class="form-group row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Kirim</button>
                  <a href="javascript:history.go(-1)" class="btn btn-danger">Back</a>
            </div>
          </div>
        </form>      
    </div>
  </div>

</div>
@endsection
@section('custom_scripts')
<script type="text/javascript">
 $(function () {
   $('.select2').select2({
    placeholder: "Organisasi Perangkat Daerah"
   });
  });
</script>
@endsection


