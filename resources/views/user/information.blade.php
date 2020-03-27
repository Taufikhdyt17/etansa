@extends('sbadmin::layouts.app')

@section('htmlheader_title')
	My Profile
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
                <img src="{{asset( 'storage/avatars/'.Auth::user()->image)}}" class="card-img">
            </div>
            <div>
                <div class="card-body">
                    <h5 class="card-title">Nama: {{Auth::user()->username}} </h5>
                    <p class="card-text">NIP: {{Auth::user()->nip}} </p>
                    <p class="card-text">E-mail: {{Auth::user()->email}}</p>
                    <p class="card-text"><small class="text-muted">
                        Member Since : {{Auth::user()->created_at->format('d F Y')}}
                            
                        </small></p>
                    <a href="{{url('user/editinformation')}}" class="btn btn-primary mb-3">Edit Profile</a>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$allsurat}} Surat</div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$archive}} Surat</div>
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
