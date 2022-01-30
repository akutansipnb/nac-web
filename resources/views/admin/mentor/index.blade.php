@extends('layouts.admin')

@section('content')

<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-12 col-12 text-right">
                    <a href="{{route('mentors.create')}}" class="btn btn-sm btn-neutral">Tambah Pendamping</a>
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
                    <h3 class="mb-0">Pendamping </h3>
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
                                <th scope="col" class="sort" data-sort="name">Nama Pendamping</th>
                                <th scope="col" class="sort" data-sort="date">NIP</th>
                                <th scope="col" class="sort" data-sort="date">Instansi</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($data as $item)
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar rounded-circle mr-3 shadow-lg">
                                            @if ($item->img_url == NULL)
                                            <img alt="Image placeholder" src="{{asset('img/icons/users.png')}}">
                                            @else
                                            <img alt="Image placeholder" src="{{asset(Auth::user()->img_url)}}">
                                            @endif
                                        </a>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$item->name}} </span>
                                        </div>
                                    </div>
                                </th>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="completion mr-2">{{$item->identity_code}}</span>
                                    </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                      <span class="completion mr-2">{{$item->academy->academy_name}}</span>
                                  </div>
                              </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="{{ route('mentors.edit',['mentor' => $item->id]) }}">Edit Data</a>
                                            <form action="{{route('mentors.destroy',['mentor' => $item->id])}}"
                                                method="post">
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
                    {{ $data->links( "pagination::bootstrap-4") }}
                  </div>
            </div>
        </div>
    </div>


</div>

@endsection
