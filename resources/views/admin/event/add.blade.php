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
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col-12">
                <h3 class="mb-0">Tambahkan Cabang Lomba </h3>
              </div>

            </div>
          </div>
          <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{route('events.store')}}">
              @csrf
              <h6 class="heading-small text-muted mb-4">Informasi Lomba</h6>
              <div class="pl-lg-4">
                {{-- Nama --}}
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-name">Nama Lomba *</label>
                      <input type="text" id="input-name" class="form-control" name="event_name" placeholder="Nama Cabang Lomba" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-initial">Inisial Lomba *</label>
                      <input type="text" id="input-initial" class="form-control" name="aliases" placeholder="OAK" required>
                    </div>
                  </div>
                </div>

                {{-- Pendataran --}}
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-date-open">Pendaftaran Dibuka *</label>
                      <input type="date" id="input-date-open" class="form-control" name="register_time" placeholder="20/01/2001" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-date-close">Pendaftaran Ditutup *</label>
                      <input type="date" id="input-date-close" class="form-control" name="register_close" placeholder="20/20/20" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-date-open">Tahun Lomba *</label>
                      <input type="number" id="input-date-open" class="form-control" name="register_year" placeholder="2020" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-date-open">Biaya Pendaftaran *</label>
                      <input type="number" id="input-date-open" class="form-control" name="registration_fee" placeholder="50.000" required>
                    </div>
                  </div>

                </div>

                {{-- Target --}}
                <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-targe">Target Peserta *</label>
                        <input type="number" id="input-target" class="form-control" name="max_slot" placeholder="1000 Orang" required>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-cabang">Tingkatan *</label>
                        <select class="form-control" name="audience" id="input-cabang" required>
                            <option selected disabled>Tingkatan Lomba</option>
                            <option value="school">Siswa/Sederajat</option>
                            <option value="university">Mahasiswa/Sederajat</option>
                          </select>
                      </div>
                    </div>
                  </div>
              </div>


              <hr class="my-4" />

              <!-- Icons -->
              <h6 class="heading-small text-muted mb-4">Tampilan Halaman</h6>
              <div class="pl-lg-4">
                <div class="row">

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-logo">Logo Lomba</label>
                        <input class="form-control" type="file" name="icon_url" id="input-logo">
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-event-cover">Sampul Lomba</label>
                        <input class="form-control" type="file" name="background_url" id="input-event-cover">
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-event-cover">Sampul Buku</label>
                        <input class="form-control" type="file" name="background_url" id="input-event-cover">
                      </div>
                    </div>
                  </div>
              </div>

              {{-- <hr class="my-4" />
              <!-- Address -->
              <h6 class="heading-small text-muted mb-4">Technical Meeting</h6>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-date-tm">Tanggal Dibuka </label>
                      <input type="date" id="input-date-tm" class="form-control" placeholder="20/01/2001">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-tm-method">Methode Technical Meeting</label>
                      <div class="form-check" id="input-tm-method">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Youtube
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Zoom/Meet/Jitsu
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}
              <hr class="my-4" />
              <!-- Description -->


              <h6 class="heading-small text-muted mb-4">Keterangan Lomba</h6>

              <div class="pl-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Deskripsi</label>
                  <textarea rows="1" class="form-control" name="desc" placeholder="Deskripsi Lomba ..." required></textarea>
                </div>
              </div>

              <div class="pl-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Motivasi</label>
                  <textarea rows="1" class="form-control" name="quotes" placeholder="Motivasi ..." required></textarea>
                </div>
              </div>


              <div class="pl-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Tentang Lomba</label>
                  <textarea rows="4" class="form-control" name="blog" placeholder="Tentang lomba ..." required></textarea>
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
