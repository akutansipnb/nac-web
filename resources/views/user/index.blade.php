@extends('layouts.dash-user')
@section('content')
<div class="header bg-primary pb-7">
    
</div>
<div class="container-fluid mt--6">
    <div class="header-body">
        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="card">
                  <!-- Card body -->
                    <img class="card-img-top img-fluid" style="max-height: 500px;" src="{{asset('img/theme/user-cover.jpg')}}" alt="Card cover">
                    <div class="card-body">
                      <h3 class="card-title" style="font-weight: 700">Halo , {{Auth::user()->name}}</h3>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Selesaikan Pendaftaran</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
              <div class="card card-stats ">
                <!-- Card body -->
                <div class="card-body p-5">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Sekolah</h5>
                      <span class="h2 font-weight-bold mb-0">Lihat Peserta Lain</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-badge"></i>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body p-5">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Pendamping</h5>
                      <span class="h2 font-weight-bold mb-0"> Lihat Pendampingmu</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                        <i class="ni ni-briefcase-24"></i>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body p-5">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Dokumentasi</h5>
                      <span class="h2 font-weight-bold mb-0"> Dokumen Pendukung</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-books"></i>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="card card-stats ">
                <!-- Card body -->
                <a href="#" class="card-body px-5">
                  <div class="row">
                    <div class="col"><h5 class="card-title text-uppercase text-muted mb-0">Keluar Dari WEB</h5>
                      <span class="h2 font-weight-bold mb-0">Logout</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-button-power"></i>
                      </div>
                    </div>
                  </div>
                </a href="#">

              </div>
             
            </div>
            
        </div>
    </div>
</div>
@endsection

