@extends('sbadmin::layouts.app')

@section('htmlheader_title')
	Detail Task
@endsection

@section('main-content')
<!-- Begin Page Content -->
<div class="container-fluid">
<div class="card border-bottom-primary">
  <div class="card-header">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="text-gray-800"><?= $title; ?></h4>
        </div>
        <div class="col-sm-6" align="right">
            <a href="javascript:history.go(-1)" class="btn btn-danger btn-icon-split">
              <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
              </span>
              <span class="text">Back</span>
            </a>       
            <a href="" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#status">
              <span class="icon text-white-50">
                <i class="fas fa-pen-alt"></i>
              </span>
              <span class="text">Ubah Status</span>
            </a>
        </div>
    </div>
  </div>
  <div class="row">
  <div class="col-sm-6">
  <div class="card-body">
    	  <div class="form-group row">
  				<label for="email" class="col-sm-3 col-form-label">Nomor Surat</label>
  				<div class="col-sm-9">
              <input type="text" class="form-control" value="#" disabled>
  				</div>
  		  </div>
        <div class="form-group row">
          <label for="email" class="col-sm-3 col-form-label">Jenis Surat</label>
          <div class="col-sm-9">
              <input type="text" class="form-control" value="Biasa" disabled>
          </div>
        </div>
          <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label">Tanggal Surat</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="#" disabled>
            </div>
          </div>
          <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label">Pengirim</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="#" disabled>
            </div>
          </div>
          <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label">Tujuan</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" value="#" disabled>
            </div>
          </div>
          <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label">Perihal</label>
            <div class="col-sm-9">
              <textarea class="form-control" disabled>dsbssb</textarea>
            </div>
          </div>
      </div>
    </div>

  <div class="col-sm-6">
  <div class="card-body">
          <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label">Tgl Sanapati</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="#" disabled>
            </div>
          </div>
          <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label">Surat Terkirim</label>
            <div class="col-sm-9">
              
                <input type="text" class="form-control" value="Proses Antar" disabled>

                <input type="text" class="form-control" value="#" disabled>

            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-3">File</div>
              <div class="col-sm-9">
                <div class="row">
                  <div class="col-sm-3" >
                    <img src="#" class="img-thumbnail">
                  </div>
                  <div class="col-sm-9">
                    <div class="custom-file">
                    <a href="#" class="btn btn-success btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-download"></i>
                      </span>
                      <span class="text">Download</span>
                    </a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-3">Tanda Terima</div>
              <div class="col-sm-9">
                <div class="row">
                  <div class="col-sm-3" >
                    <img src="#" class="img-thumbnail">
                  </div>
                  <div class="col-sm-9">
                    <div class="custom-file">
                    <a href="#" class="btn btn-success btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-download"></i>
                      </span>
                      <span class="text">Download</span>
                    </a>
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

</div>
<!-- End of Main Content --> 
<!-- Modal -->

@endsection