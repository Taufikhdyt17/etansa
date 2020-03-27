@extends('sbadmin::layouts.app')

@section('htmlheader_title')
	Manage User
@endsection

@section('main-content')
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="text-gray-800">Manage User</h4>
            </div>
        </div>
    </div>
    <div class="card-body border-bottom-primary">
        <div class="col-lg-12 table-responsive">      	
            <table class="table table-bordered table-striped" id="manage-user" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center;">No.</th>
                        <th scope="col">Nama Pengguna</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Email/Username</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @php 
                $no = 1;
                @endphp
                   @forelse($user as $data)
                    <tr>
                        <th scope="row" style="text-align: center;">{{$no++}}</th>
                        <td>{{$data->username}}</td>
                        <td>{{$data->nip}}</td>
                        <td>{{$data->email}}</td>
                        @foreach($data->roles as $roles)
                        <td>{{$roles->name}}</td>
                        @endforeach
                        <td>
                            <a href="#" class="badge badge-pill badge-success">Edit</a>
                            <a href="#" class="badge badge-pill badge-danger" onclick="return confirm('Yakin ?');">Delete</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
						<td colspan="6" align="center">Data Tidak Ada</td>
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
    $('#manage-user').DataTable();
} );
</script>
@endsection