@extends('layouts.admin')

@section('content')

<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-12 col-12 text-right">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col">
        <div class="card">
          <!-- Card header -->
          <div class="card-header border-0">
            <h3 class="mb-0">Daftar Peserta Lomba {{ $comp }}</h3>
          </div>

          {{-- success --}}
          @if(session('success'))
          <div class="alert alert-success mb-3 mx-4" role="alert">
              {{session('success')}}
          </div>
          @endif

          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush" style="height: 200px">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort" data-sort="name">Nama</th>
                  <th scope="col" class="sort" data-sort="date">Instansi</th>
                  <th scope="col" class="sort" data-sort="budget">NIM/NIS</th>
                  <th scope="col" class="sort" data-sort="status">No Telp</th>
                  <th scope="col" class="sort" data-sort="completion">Jurusan</th>
                  <th scope="col" class="sort" data-sort="completion">Semester</th>
                  <th scope="col" class="sort" data-sort="completion">Alamat</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody class="list">
                @foreach ($datas as $item)
                <tr>
                  <th>
                    <div class="media align-items-center">
                      {{ $item->users->name }}
                    </div>
                  </th>
                  <td class="date">
                    {{ $item->academy->academy_name }}
                  </td>
                  <td class="budget">
                    {{ $item->identity_code }}
                  </td>
                  <td>
                    {{ $item->phone }}
                  </td>
                  <td>
                    {{ $item->department }}
                  </td>
                  <td>
                    {{ $item->edu_stage }}
                  </td>

                  <td>
                    {{ $item->adress}}
                  </td>
                 
                </tr>
                @endforeach


              </tbody>
            </table>
          </div>
          <!-- Card footer -->
          <div class="card-footer py-4 pagination justify-content-end mb-0">
            {{ $datas->links( "pagination::bootstrap-4") }}
          </div>
        </div>
      </div>
    </div>


  </div>

@endsection
