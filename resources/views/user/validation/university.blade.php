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
                        <label class="form-control-label" for="input-logo">Student ID Card</label>
                        <input class="form-control @error('validation_1') is-invalid @enderror" type="file" name="validation_1" id="input-logo" required>
                            @error('validation_1')
                                <div class="invalid-feedback" role="alert">
                                    <strong> {{ $message }} </strong>
                                </div>
                            @enderror
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-event-cover">Active Student Statement Letter</label>
                        <input class="form-control @error('validation_2') is-invalid @enderror" type="file" name="validation_2" id="input-event-cover" required>
                            @error('validation_2')
                                <div class="invalid-feedback" role="alert">
                                    <strong> {{ $message }} </strong>
                                </div>
                            @enderror
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-event-cover">Evidence of Payment</label>
                        <input class="form-control @error('validation_3') is-invalid @enderror" type="file" name="validation_3" id="input-event-cover" required>
                            @error('validation_3')
                                <div class="invalid-feedback" role="alert">
                                    <strong> {{ $message }} </strong>
                                </div>
                            @enderror
                      </div>
                    </div>
                  </div>
              </div>




              <button type="submit" class="btn btn-warning w-100">Save Data</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
