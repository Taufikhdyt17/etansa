@extends('sbadmin::layouts.app')

@section('htmlheader_title')
	Task
@endsection

@section('main-content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="text-gray-800">Archive</h4>
            </div>
            <div class="col-sm-6" align="right">
                <a href="" class="btn btn-success" data-toggle="modal" data-target="#cetak">
                  <span class="icon text-white-50">
                    <i class="fas fa-file-pdf"></i>
                  </span>
                  <span class="text">Cetak Lapran</span>
                </a>
            </div>
        </div>
    </div>

    <div class="card-body border-bottom-primary">
        <div class="col-lg-12 table-responsive">
            <table class="table table-striped table-bordered datatable" id="archive" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">No.Surat</th>
                        <th scope="col">Pengirim</th>
                        <th scope="col">Tanggal Surat</th>
                        <th scope="col">Tanggal Masuk Sanapati</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @php 
                $no = 1;
                @endphp
                @forelse($surat as $data)
                    	<tr>
                        	<th scope="row" style="text-align: center;">1</th>
                        	<td>{{$data->no_surat}}</td>
                            <td>{{$data->pengirim}}</td>
                        	<td>{{$data->tgl_surat}}</td>
                        	<td>{{$data->tgl_kirim}}, 
                                {{$data->jam}}
                            </td>
                            <td>
                            	<a href="#" class="badge badge-pill badge-warning">Details</a>
                                
                                <a href="#" class="badge badge-pill badge-success">Edit</a>
                                <a href="#" class="badge badge-pill badge-danger" onclick="return confirm('Yakin ?');">Delete</a>
                        	</td>
                    	</tr>
                        @empty
                      <tr>
                        <td colspan="7" align="center">Data Tidak Ada</td>
                      </tr>
                  @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
@section('custom_scripts')
<script type="text/javascript">
$(document).ready( function () {
    $('#archive').DataTable();
} );
</script>
@endsection

