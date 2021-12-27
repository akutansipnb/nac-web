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
                <h3 class="mb-0">Edit Berita </h3>
              </div>

            </div>
          </div>
          <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{route('blogs.update',['blog' => $data->id])}}">
              @csrf
              @method('PUT')
              <h6 class="heading-small text-muted mb-4">Informasi Berita</h6>
              <div class="pl-lg-4">
                {{-- Nama --}}
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-name">Judul Berita *</label>
                      <input type="text" id="input-name" class="form-control" name="title" placeholder="Nama Judul Berita" value="{{ $data->title }}">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Isi Berita</label>
                        <textarea rows="4" class="ckeditor" id="wysiwyg" name="desc" placeholder="Masukkan Isi berita ..."><?= $data->desc ?></textarea>
                      </div>
                  </div>
                </div>

                
              </div>

              
              <hr class="my-4" />

              <!-- Icons -->
              <h6 class="heading-small text-muted mb-4">Tampilan Halaman</h6>
              <img src="{{ asset($data->background_url) }}" alt="" style="width: 100px;height:70px;">
              <div class="pl-lg-4 pt-4">
                <div class="row">

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-logo">Cover Berita</label>
                        <input class="form-control" type="file" name="background_url" id="input-logo">
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
              

              <button type="submit" class="btn btn-warning w-100">Simpan Data</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection