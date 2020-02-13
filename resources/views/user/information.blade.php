@extends('sbadmin::layouts.app')

@section('htmlheader_title')
	Information
@endsection

@section('main-content')
<div class="container-fluid">
<div class="row">
<div class="col-sm-6">
  <div class="card">
    <div class="card-header">
      <h4 class="text-gray-800">My Profile</h4>
    </div>
    <div class="card-body border-bottom-primary">
    <div class="row">
        <div class="col-lg-10">

        </div>
    </div>
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="#" class="card-img">
            </div>
            <div>
                <div class="card-body">
                    <h5 class="card-title">Nama</h5>
                    <p class="card-text">NIP. </p>
                    <p class="card-text">E-mail</p>
                    <p class="card-text"><small class="text-muted">
                            Member Since : 19 januari 2020</small></p>
                    <a href="#" class="btn btn-primary mb-3">Edit Profile</a>
                    <a href="#" class="btn btn-danger mb-3">Change Password</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="col-sm-6">
  <div class="card">
    <div class="card-header">
      <h4 class="text-gray-800">Analytics</h4>
    </div>
    <div class="card-body border-bottom-primary">
        <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Surat Masuk Bulan ini
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Surat</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Jumlah Arsip</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> Surat</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-archive fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- /.container-fluid -->
@endsection
