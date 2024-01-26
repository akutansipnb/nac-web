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
                      <h3 class="card-title" style="font-weight: 700">Hello, {{Auth::user()->name}}</h3>

                      @if (Auth::user()->details->validation_status == 'unactive')
                      <p class="card-text">Please complete the requirements to finalize your registration!</p>
                        <a href={{route('user.validation')}} class="btn btn-primary">Please Complete Registration</a>
                      @endif

                      {{-- success --}}
                      @if(Auth::user()->details->validation_status=='pending')
                      <p class="card-text">Please wait, we are validating your data.</p>
                        <div class="alert alert-warning mb-3 " role="alert">
                            Data Validation Process
                        </div>
                      @elseif (Auth::user()->details->validation_status=='active')
                      <p class="card-text">Congratulations! Your data has been successfully validated, please check your email to join the competition participant group. <span style="font-weight: 700">{{ Auth::user()->details->events->event_name }} ({{ Auth::user()->details->events->aliases }}) {{ Auth::user()->details->events->year }}</span></p>
                        @if (Auth::user()->details->events->tm_time != null)
                            @if (Auth::user()->details->events->tm_method == 'zoom')
                                <a href="{{ Auth::user()->details->events->tm_url }}" class="btn btn-primary w-100">Join Virtual Meeting </a>
                            @else
                                <a href="{{ Auth::user()->details->events->tm_url }}" class="btn btn-danger w-100">Join the Technical Meeting (Youtube)</a>
                            @endif
                        @else
                            <div class="alert alert-success mb-3 " role="alert">
                                Data Successfully Validated
                            </div>
                        @endif
                      @endif

                    </div>
                </div>
            </div>
           @if (Auth::user()->details->validation_status === 'active')
           <div class="col-xl-6 col-md-6">

            <div class="card card-stats ">
              <!-- Card body -->
              <a href={{ route('listpeserta.index') }}>
              <div class="card-body p-5">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">School</h5>
                    <span class="h2 font-weight-bold mb-0">View Other Participants</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                      <i class="ni ni-badge"></i>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>

            <div class="card card-stats">
              <!-- Card body -->
              <a href={{ route('pendamping.index') }}>
              <div class="card-body p-5">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Mentor Teacher</h5>
                    <span class="h2 font-weight-bold mb-0"> View Mentor Teacher</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                      <i class="ni ni-briefcase-24"></i>
                    </div>
                  </div>
                </div>

              </div>
            </a>
            </div>

            <div class="card card-stats">
              <a href="{{ route('downloadbooklet',['id' => Auth::user()->details->events->id ]) }}">
              <!-- Card body -->
              {{-- <a href="{{ route('downloadbooklet',['id' => Auth::user()->details->events->id, 'booklet_url' => 1 ]) }}"> --}}
              <div class="card-body p-5">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Documentation</h5>
                    <span class="h2 font-weight-bold mb-0"> Supporting Documents</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                      <i class="ni ni-books"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>

            <div class="card card-stats ">
              <!-- Card body -->
              <a href={{ route('logout') }} class="card-body px-5" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                <div class="row">
                  <div class="col"><h5 class="card-title text-uppercase text-muted mb-0">Log Out</h5>
                    <span class="h2 font-weight-bold mb-0">Logout</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                      <i class="ni ni-button-power"></i>
                    </div>
                  </div>
                </div>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

            </div>

          </div>
           @endif

        </div>
    </div>
</div>
@endsection


