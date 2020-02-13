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
                <h4 class="text-gray-800"><?= $title; ?> - Surat Masuk (Kategori : Biasa)</h4>
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
        <div class="col-lg-12">
            <table class="table table-striped table-bordered datatable" width="100%" cellspacing="0">
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
                    	<tr>
                        	<th scope="row" style="text-align: center;"><?= $i; ?></th>
                        	<td>no surat</td>
                        	<td>pengirim</td>
                        	<td>tanggal surat</td>
                        	<td>tanggal sanapati, 
                                jam</td>
                        	<td>
                            	<a href="#" class="badge badge-pill badge-warning">Details</a>
                                
                                <a href="#" class="badge badge-pill badge-success">Edit</a>
                                <a href="#" class="badge badge-pill badge-danger" onclick="return confirm('Yakin ?');">Delete</a>
                                <a href="#" class="badge badge-pill badge-success">Upload Resi</a>

                        	</td>
                    	</tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection

