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
                            <h3 class="mb-0">Tambahkan Administrator </h3>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{route('register.store')}}">
                        @csrf
                            <h6 class="heading-small text-muted mb-4">Informasi Admin</h6>
                            <div class="pl-lg-4">
                            {{-- Nama --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Nama Admin *</label>
                                        <input type="text" id="input-name" class="form-control" name="name"
                                            placeholder="Nama Cabang Lomba">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-initial">Email *</label>
                                        <input type="email" id="input-initial" class="form-control" name="email"
                                            placeholder="OAK">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">password *</label>
                                        <input type="password" id="input-name" class="form-control" name="password"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4" />
                            <!-- Icons -->
                            <h6 class="heading-small text-muted mb-4">Photo Profile</h6>
                            <div class="pl-lg-4">
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-logo">Photo Profile</label>
                                            <input class="form-control" type="file" name="img_url" id="input-logo">
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
