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
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="mb-0">Add Mentor Teacher </h3>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{route('pendamping.store')}}">
                        @csrf
                            <h6 class="heading-small text-muted mb-4">Mentor Teacher Information</h6>
                            <div class="pl-lg-4">
                            {{-- Nama --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Mentor Teacher Name</label>
                                        <input type="text" id="input-name" class="form-control" name="name"
                                        placeholder="Input Your Mentor Teacher Name" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-initial">NIP</label>
                                        <input type="text" id="input-initial" class="form-control @error('identity_code') is-invalid @enderror" name="identity_code"
                                        placeholder="Input Your Mentor Teacher NIP" required>
                                        @error('identity_code')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-initial">Mentor Teacher Phone Number</label>
                                        <input type="text" id="input-initial" class="form-control" name="phone"
                                        placeholder="Input Your Mentor Teacher Phone Number" required>
                                    </div>
                                </div>
                            </div>
{{--
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Instansi</label>
                                        <select name="academy_id" class="form-control " aria-label="Default select example" required>
                                            @foreach ($academy as $items)
                                            <option value="{{ $items->id }}">{{ $items->academy_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            </div>
                            <hr class="my-4" />
                            <!-- Icons -->
                            <h6 class="heading-small text-muted mb-4">Event</h6>
                            <div class="pl-lg-4">
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-logo">Photo Profile</label>
                                            <select name="event_id" class="form-control " aria-label="Default select example" required>
                                                @foreach ($event as $items)
                                                <option value="{{ $items->id }}">{{ $items->event_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <button type="submit" class="btn btn-warning w-100">Save Data</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
