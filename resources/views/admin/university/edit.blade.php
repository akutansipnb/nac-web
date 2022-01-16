@extends('layouts.admin')

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">

        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col-xl-12 order-xl-1">
        <div class="card">

          <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{route('university.update', $university->id)}}">
              @csrf
              @method('PUT')
              <input type="hidden" name="id" value="">
              <h6 class="heading-small text-muted mb-4">Edit Perguruan Tinggi</h6>
              <div class="pl-lg-4">
              <hr class="my-4" />
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                        <div class="form-group">
                          <label class="form-control-label">Nama Perguruan Tinggi</label>
                          <input type="text" id="input-date-open" class="form-control" name="academy_name" value="{{ $university->academy_name }}">
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-date-tm">Telepon Perguruan Tinggi </label>
                      <input type="number" id="input-date-tm" name="phone" class="form-control" value="{{ $university->phone }}">
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-4" />
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-tm-method">Alamat Perguruan Tinggi</label>
                        <div class="form-group">
                          <textarea rows="4" class="form-control" name="address">{{ $university->address }}</textarea>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-warning w-100">Simpan Data</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
