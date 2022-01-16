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
                            <h3 class="mb-0">Tambahkan Pendamping </h3>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{route('pendamping.store')}}">
                        @csrf
                            <h6 class="heading-small text-muted mb-4">Informasi Pendamping</h6>
                            <div class="pl-lg-4">
                            {{-- Nama --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Nama Pendamping</label>
                                        <input type="text" id="input-name" class="form-control" name="name"
                                        placeholder="Masukkan Nama Pendamping Anda" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-initial">NIP</label>
                                        <input type="text" id="input-initial" class="form-control" name="identity_code"
                                        placeholder="Masukkan NIP Pendamping Anda" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-initial">No HP Pendamping</label>
                                        <input type="text" id="input-initial" class="form-control" name="phone"
                                        placeholder="Masukkan No HP Pendamping Anda" required>
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
                            <button type="submit" class="btn btn-warning w-100">Simpan Data</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
