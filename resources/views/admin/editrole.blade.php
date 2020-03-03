@extends('sbadmin::layouts.app')

@section('htmlheader_title')
	Edit Role
@endsection

@section('main-content')
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      Edit Role
    </div>
    <div class="card-body">
      <form action="{{}}" method="POST">
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Role</label>
            <div class="col-sm-8">
              <input type="hidden" class="form-control" id="id" name="id_role" value="<?= $role['id_role']; ?>">
              <input type="text" class="form-control" id="role" name="role" value="<?= $role['role']; ?>">
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
