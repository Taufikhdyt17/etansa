@extends('sbadmin::layouts.app')

@section('htmlheader_title')
	Pejabat
@endsection

@section('main-content')
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="text-gray-800">Pejabat</h4>
            </div>
            <div class="col-sm-6" align="right">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#pejabat">
                    <span class="icon text-white-50">
                        <i class="fas fa-user-tie"></i>
                    </span>
                    <span class="text">Add New Pejabat</span>
                </a>
            </div>
        </div>
  </div>

    <div class="card-body border-bottom-primary">
        <div class="col-lg-12">

            <table class="table table-bordered datatable" width="100%" cellspacing="0">
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
                    <tr>
                        <th scope="row" style="text-align: center;">1</th>
                        <td>gdfgr</td>
                        <td>drgd</td>
                        <td>ljilj</td>
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