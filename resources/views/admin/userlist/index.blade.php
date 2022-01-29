@extends('layouts.admin')

@section('content')

<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-12 col-12 text-right">
            {{-- <a href="" class="btn btn-sm btn-neutral">Tambah Sekolah</a> --}}
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
            <h3 class="mb-0">List Peserta</h3>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort" data-sort="name">Nama Peserta</th>
                  <th scope="col" class="sort" data-sort="name">Asal Instansi</th>
                  <th scope="col" class="sort" data-sort="name">Cabang Lomba</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody class="list">
                @foreach ($data as $item)
                <tr>
                  <th scope="row">
                    {{ $item->users->name }}
                  </th>
                  <td class="date">
                    {{$item->academy->academy_name}}
                  </td>
                  <td class="date">
                    {{$item->events->event_name}} ({{$item->events->year}})
                  </td>

                  <td class="text-right">
                    <div class="dropdown">
                      <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      {{-- dropdown menu --}}
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href={{route('contestants.show',$item->id)}}>Details</a>
                        <a class="dropdown-item" href={{route('contestants.edit',$item->id)}}>Edit Data</a>
                            <form action="{{route('register.destroy',['register' => $item->id])}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="dropdown-item">Hapus Data</button>
                            </form>
                      </div>
                    </div>
                  </td>
                </tr>
                @endforeach


              </tbody>
            </table>
          </div>
          <!-- Card footer -->
          <div class="card-footer py-4 pagination justify-content-end mb-0">
            {{-- {{ $data->links( "pagination::bootstrap-4") }} --}}
          </div>
        </div>
      </div>
    </div>


  </div>

@endsection
