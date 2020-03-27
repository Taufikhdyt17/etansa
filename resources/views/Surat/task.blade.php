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
                <h4 class="text-gray-800">Task - Surat Masuk (Kategori : Biasa)</h4>
            </div>
            <div class="col-sm-6" align="right">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#newFile">
                  <span class="icon text-white-50">
                    <i class="fas fa-file"></i>
                  </span>
                  <span class="text">Add New File</span>
                </a>
            </div>
        </div>
    </div>

    <div class="card-body border-bottom-primary">
        <div class="col-lg-12 table-responsive">
            <table class="table table-striped table-bordered datatable" id="task" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">No.Surat</th>
                        <th scope="col">Pengirim</th>
                        <th scope="col">Tanggal Surat</th>
                        <th scope="col">Tanggal Masuk Sanapati</th>
                        <th scope="col">Kirim</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @php 
                $no = 1;
                @endphp
                @forelse($surat as $data)
                    	<tr>
                        	<th scope="row" style="text-align: center;">{{$no++}}</th>
                        	<td>{{$data->no_surat}}</td>
                        	<td>{{$data->pengirim}}</td>
                        	<td>{{$data->tgl_surat}}</td>
                        	<td>{{$data->tgl_kirim}}, 
                          {{$data->jam}}</td>
                          <td><a href="{{url('surat/send/'.$data->id)}}" class="badge badge-pill badge-primary"><i class="fas fa-paper-plane"></i> Kirim</a></td>
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
<div class="modal fade" id="newFile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{url('surat/storetask')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="modal-body">  
        <div class="form-group">
            <input type="text" class="form-control" name="pengirim" placeholder="Pengirim">
        </div>
        <div class="form-group">
            <select name="jenis_surat" class="form-control" >
                <option value="0">Biasa</option>
                <option value="1">Rahasia</option>
            </select>
        </div> 
        <div class="form-group">
            <input type="text" class="form-control" name="no_surat" placeholder="No Surat">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="perihal" placeholder="Perihal">
        </div>
        <div class="form-group">
            <input type="date" class="form-control" name="tgl_surat" placeholder="Tanggal Surat">
        </div> 
        <div class="custom-file">
	      <input type="file" class="custom-file-input" name="file">
	      <label class="custom-file-label" for="file">Choose file</label>
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
    $('#task').DataTable();
} );
</script>
@endsection
