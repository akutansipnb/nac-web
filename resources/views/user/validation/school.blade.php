@extends('layouts.dash-user')

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
            <form method="POST" enctype="multipart/form-data" action="{{route('user.validate')}}">
              @csrf
              <!-- Icons -->

              <div class="pl-lg-4">
                <div class="row">

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-logo">Kartu Tanda Siswa</label>
                        <input class="form-control" type="file" name="validation_1" id="input-logo" required>
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-event-cover">Surat Delegasi Sekolah</label>
                        <input class="form-control" type="file" name="validation_2" id="input-event-cover" required>
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-event-cover">Bukti Pembayaran</label>
                        <input class="form-control" type="file" name="validation_3" id="input-event-cover" required>
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-event-cover">Foto Diri</label>
                        <input class="form-control" type="file" name="validation_4" id="input-event-cover" required>
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-event-cover">Fakta Integritas</label>
                        <input class="form-control" type="file" name="validation_5" id="input-event-cover" required>
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
