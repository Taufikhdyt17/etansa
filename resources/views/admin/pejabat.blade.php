@extends('sbadmin::layouts.app')

@section('htmlheader_title')
	Pejabat
@endsection
@section('main-content')
<div class="container-fluid">
@error('nama_pejabat')
    <script type="text/javascript">
        alertify.error('Error message');
    </script>
@enderror
  <div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="text-gray-800">Pejabat</h4>
            </div>
            <div class="col-sm-6" align="right">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#pejabat1">
                    <span class="icon text-white-50">
                        <i class="fas fa-user-tie"></i>
                    </span>
                    <span class="text">Add New Pejabat</span>
                </a>
            </div>
        </div>
  </div>

    <div class="card-body border-bottom-primary">
        <div class="col-lg-12 table-responsive">
            <table class="table table-bordered table-striped" id="pejabat" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center;">#</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @php 
                $no = 1;
                @endphp
                @forelse($pejabat as $data)
                    <tr>
                        <th scope="row" style="text-align: center;">{{$no++}}</th>
                        <td>{{$data->nama_pejabat}}</td>
                        <td>{{$data->nip}}</td>
                        <td>{{$data->jabatan}}</td>
                        <td>
                            <a href="{{url('admin/editpejabat/'.$data->id)}}" class="badge badge-pill badge-success">Edit</a>
                        <form action="{{ url('admin/destroypejabat/'.$data->id) }}" method="POST">
                              @csrf
                              <input type="hidden" name="_method" value="DELETE">
                              <button class="badge badge-pill badge-danger">delete</button>
                        </form>
                        </td>
                    </tr>
                @empty
                <tr>
                <td colspan="4" align="center">Data Tidak Ada</td>
                </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="pejabat1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Pejabat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{url('admin/storepejabat')}}" method="POST">
      @csrf
      <div class="modal-body">  
        <div class="form-group">
            <input type="text" class="form-control" name="nama_pejabat" placeholder="Nama Lengkap">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="nip" placeholder="NIP">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="jabatan" placeholder="Jabatan">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div> 
@endsection
@section('custom_scripts')
<script type="text/javascript">
$(document).ready( function () {
    $('#pejabat').DataTable();
} );
</script>
@endsection