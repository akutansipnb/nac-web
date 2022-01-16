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
            <form method="POST" action="{{route('tm.update',['tm',$data['id']])}}">
              @method('put')
              @csrf
              <input type="hidden" name="id" value={{$data['id']}}>
              <h6 class="heading-small text-muted mb-4">Informasi Technical Meeting : {{$data['event_name']}} ({{$data['year']}})</h6>
              <div class="pl-lg-4">
              <hr class="my-4" />
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-date-tm">Tanggal Dibuka </label>
                      <input type="date" id="input-date-tm" name="tm_date" class="form-control" placeholder="20/01/2001" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-tm-link">Link Technical Meeting </label>
                      <input type="input-tm-link" id="input-date-tm" name="tm_url" class="form-control" placeholder="https://meet.com" required>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-4" />
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-tm-method">Methode Technical Meeting</label>
                      <div class="form-check" id="input-tm-method">
                        <input class="form-check-input" type="radio" name="tm_method" value="youtube" id="flexRadioDefault1" required>
                        <label class="form-check-label" for="flexRadioDefault1">
                          Youtube
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" value="zoom" type="radio" name="tm_method" id="flexRadioDefault2" checked required>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Zoom/Meet/Jitsu
                        </label>
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
