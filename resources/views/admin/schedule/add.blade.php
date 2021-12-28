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
            <form method="POST" enctype="multipart/form-data" action="{{route('schedules.store')}}">
              @csrf
              <h6 class="heading-small text-muted mb-4">Tambahkan Lintas Waktu</h6>
              <div class="pl-lg-4">
              <hr class="my-4" />
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                        <div class="form-group">
                          <label class="form-control-label">Nama Acara</label>
                          <input type="text" id="input-date-open" class="form-control" name="schedule" placeholder="Pembukaan">
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-date-tm">Tanggal Mulai </label>
                      <input type="date" id="input-date-tm" name="date_start" class="form-control" placeholder="01/01/2021">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-tm-link">Tanggal Selesai </label>
                      <input type="date" id="input-date-tm" name="date_end" class="form-control" placeholder="01/01/2021">
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-4" />
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-tm-method">Deskripsi Lintas Waktu</label>
                        <div class="form-group">
                          <textarea rows="1" class="form-control" name="desc" placeholder="Deskripsi Lintas Waktu ..."></textarea>
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
