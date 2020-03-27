@extends('sbadmin::layouts.app')

@section('htmlheader_title')
	edit Profile
@endsection

@section('main-content')
<div class="container-fluid">
<div class="card">
  <div class="card-header">
      <h4 class="text-gray-800">Edit Profile</h4>
  </div>
  <div class="card-body">
        <form action="{{url('user/updateinformation/'.Auth::user()->id)}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
            @csrf
    		  	<div class="form-group row">
  				  <label for="email" class="col-sm-2 col-form-label">Email</label>
  				  <div class="col-sm-10">
  				    <input type="text" class="form-control" id="email" name="email" value="{{Auth::user()->email}}" readonly>
  				  </div>
  				</div>
          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Full Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="username" name="username" value="{{Auth::user()->username}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">NIP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nip" name="nip" value="{{Auth::user()->nip}}">
            </div>
          </div>
            <input type="hidden" class="form-control" name="old_file" value="{{asset('img/avatar/default.jpg')}}">
    		  	<div class="form-group row">
    		  		<div class="col-sm-2">Picture</div>
    		  		<div class="col-sm-10">
    		  			<div class="row">
    		  				<div class="col-sm-3" >
    		  					<img src="{{asset('img/avatar/default.jpg')}}" class="img-thumbnail">
    		  				</div>
    		  				<div class="col-sm-9">
    		  					<div class="custom-file">
								      <input type="file" class="custom-file-input" id="image" name="image">
								      <label class="custom-file-label" for="image">Choose file</label>
								    </div>
    		  				</div>
    		  			</div>
    		  		</div>
  				</div>
  				<div class="form-group row justify-content-end">
  					<div class="col-sm-10">
  						<button type="submit" class="btn btn-primary">Edit</button>
                  <a href="javascript:history.go(-1)" class="btn btn-danger">Back</a>
  					</div>
  				</div>
    		</form>
      </div>
    </div>

</div>
@endsection

