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
      <div class="col-xl-10 order-xl-1">
        <div class="card">
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col-10">
                <h3 class="mb-0">Detail Peserta </h3>
              </div>

            </div>
          </div>
          <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{route('events.store')}}">
              @csrf
              <h6 class="heading-small text-muted mb-4">Informasi Pribadi</h6>
              <div class="pl-lg-4">
                {{-- Nama --}}
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-name">Nama Peserta</label>
                      <input type="text" id="input-name" class="form-control" value="{{$data->users['name']}}" disabled>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-initial">Asal Sekolah</label>
                      <input type="text" id="input-initial" class="form-control" value="{{$data->academy['academy_name']}}" disabled>
                    </div>
                  </div>
                </div>

                {{-- Pendataran --}}
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-date-open">Tanggal Lahir</label>
                      <input type="date" id="input-date-open" class="form-control" value={{$data['birth_date']}} disabled>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-date-close">NIM</label>
                      <input type="text" id="input-date-close" class="form-control" value={{$data['identity_code']}} disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-date-open">Nomor Telephone</label>
                      <input type="number" id="input-date-open" class="form-control" value={{$data['phone']}} disabled>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-date-open">Tingkat Pendidikan</label>
                      <input type="text" id="input-date-open" class="form-control" value= "Semester {{$data['edu_stage']}}" disabled>
                    </div>
                  </div>

                </div>

                {{-- Target --}}
                <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-targe">Jurusan</label>
                        <input type="text" id="input-target" class="form-control" value={{$data['department']}} disabled>
                      </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-targe">Alamat</label>
                          <input type="text" id="input-target" class="form-control" value={{$data['adress']}} disabled>
                        </div>
                      </div>

                  </div>
              </div>


              <hr class="my-4" />
              <h6 class="heading-small text-muted mb-4">Dokumen</h6>
              <div class="row justify-content-center">
                  @if ($data->events['audience'] == 'school')
                  <div class="col-12 col-md-6"><div class="card {{ ($data['validation_1'] == NULL)? "d-none" : " " }}" >
                    <img class="card-img-top" src={{asset($data['validation_1'])}} alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                    </div>
                  </div></div>
                  <div class="col-12 col-md-6"><div class="card {{ ($data['validation_2'] == NULL)? "d-none" : " " }}" >
                    <img class="card-img-top" src={{asset($data['validation_2'])}} alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                    </div>
                  </div></div>
                  <div class="col-12 col-md-6"><div class="card {{ ($data['validation_3'] == NULL)? "d-none" : " " }}" >
                    <img class="card-img-top" src={{asset($data['validation_3'])}} alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                    </div>
                  </div></div>

                  <div class="col-12 col-md-6"><div class="card {{ ($data['validation_4'] == NULL)? "d-none" : " " }}" >
                    <img class="card-img-top" src={{asset($data['validation_4'])}} alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                    </div>
                  </div></div>
                  <div class="col-12 col-md-6"><div class="card card {{ ($data['validation_5'] == NULL)? "d-none" : " " }}" >
                    <img class="card-img-top" src={{asset($data['validation_5'])}} alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                    </div>
                  </div></div>

                  @else
                       <div class="col-12 col-md-6"><div class="card {{ ($data['validation_1'] == NULL)? "d-none" : " " }}" >
                    <img class="card-img-top" src={{asset($data['validation_1'])}} alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Kartu Tanda Mahasiswa </h5>
                      <p class="card-text">Periksa Kartu Tanda Mahasiswa Peserta Ini</p>

                    </div>
                  </div></div>
                  <div class="col-12 col-md-6"><div class="card {{ ($data['validation_2'] == NULL)? "d-none" : " " }}" >
                    <img class="card-img-top" src={{asset($data['validation_2'])}} alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Pernyataan Aktiv</h5>
                      <p class="card-text">Periksa Surat Pernyataan Mahasiswa aktiv dari Peserta Ini</p>

                    </div>
                  </div></div>
                  <div class="col-12 col-md-6"><div class="card {{ ($data['validation_3'] == NULL)? "d-none" : " " }}" >
                    <img class="card-img-top" src={{asset($data['validation_3'])}} alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Kuitansi</h5>
                      <p class="card-text">Periksa bukti pembayaran dari peserta ini</p>

                    </div>
                  </div></div>
                  @endif

              </div>
              <div class="pl-lg-4">

              @if ($data->validation_status == 'pending')
              <a href="{{route('validation.acc',['id' => $data['id']])}}" class="btn btn-warning w-100">Validasi Peserta</a>
              @elseif($data->validation_status == 'uncative')
              <a href="#" class="btn btn-secondary w-100" disabled>Peserta Belum Mengirim Data</a>
              @else
              <a href="#" class="btn btn-secondary w-100" disabled>Peserta Tervalidasi</a>
              @endif
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
