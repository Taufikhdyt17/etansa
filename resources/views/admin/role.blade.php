@extends('sbadmin::layouts.app')

@section('htmlheader_title')
	Role
@endsection

@section('main-content')
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="text-gray-800">Role</h4>
            </div>
            <div class="col-sm-6" align="right">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#newRole">Add New Role</a>
            </div>
        </div>
    </div>

    <div class="card-body border-bottom-primary">
        <div class="col-lg-12">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center;">No</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                @php
				$no = 1;
				@endphp
                <tbody>
                    @forelse($role as $data)
                    <tr>
                        <th scope="row" style="text-align: center;">{{$no++}}</th>
                        <td>{{$data->name}}</td>
                        <td>
                            <a href="#" class="badge badge-pill badge-warning">Access</a>
                            <a href="#" class="badge badge-pill badge-success">Edit</a>
                        </td>
                        <td>
                        <form action="{{ url('admin/destroyrole/'.$data->id) }}" method="POST">
                              @csrf
                              <input type="hidden" name="_method" value="DELETE">
                              <button class="badge badge-pill badge-danger">delete</button>
                        </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
						<td colspan="3" align="center">Data Tidak Ada</td>
					</tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="newRole" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{url('admin/storerole')}}" method="POST">
      @csrf
      <div class="modal-body">  
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Role Name">
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
