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
        <div class="col-lg-12">
        	
            <table class="table table-striped table-bordered datatable" cellspacing="0" style="width:100%">
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
                   
                    <tr>
                        <th scope="row" style="text-align: center;">1</th>
                        <td>name</td>
                        <td>nip</td>
                        <td>afsa</td>
                        <td>
                            dasf
                            </td>
                        <td>
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