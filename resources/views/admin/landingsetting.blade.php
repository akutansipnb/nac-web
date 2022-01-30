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
            <form method="POST" action="{{ route('landing.update') }}">
              @csrf

              <h6 class="heading-small text-muted mb-4">Landing Page Setting</h6>

              {{-- success --}}
              @if(session('success'))
              <div class="alert alert-success" role="alert">
                  {{session('success')}}
              </div>
              @endif

              <div class="pl-lg-4">
              <hr class="my-4" />
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-date-tm">Tema </label>
                      <input type="text" id="input-date-tm" name="theme" class="form-control" value="{{ $theme }}" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-tm-link">Quotes</label>
                      <input type="input-tm-link" id="input-date-tm" name="quotes" class="form-control" value="{{ $quotes }}" required>
                    </div>
                  </div>
                </div>
              </div>

              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="input-date-tm">Desksripsi Acara</label>
                        <input type="text" id="input-date-tm" name="desc_quotes" class="form-control" value="{{ $desc_quotes }}" required>
                      </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                          <label class="form-control-label" for="input-date-tm">Link Video Pembukaan</label>
                          <input type="text" id="input-date-tm" name="url_video" class="form-control" value="{{ $url_video }}" required>
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
