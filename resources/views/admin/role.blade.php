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
                        <th scope="col" style="text-align: center;">#</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <th scope="row" style="text-align: center;">xxx</th>
                        <td>1</td>
                        <td>
                            <a href="#" class="badge badge-pill badge-warning">Access</a>
                            <a href="#" class="badge badge-pill badge-success">Edit</a>
                            <a href="#" class="badge badge-pill badge-danger" onclick="return confirm('Yakin ?');">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection