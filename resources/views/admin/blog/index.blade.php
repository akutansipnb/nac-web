@extends('layouts.admin')

@section('content')

<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-12 col-12 text-right">
            <a href="{{route('blogs.create')}}" class="btn btn-sm btn-neutral">Tambah Berita</a>
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
            <h3 class="mb-0">Semua Berita</h3>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush" style="height: 200px">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort" data-sort="name">Judul Berita</th>
                  <th scope="col" class="sort" data-sort="date">Isi Berita</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody class="list">
                @foreach ($data as $item)
                <tr>
                  <th scope="row">
                    <div class="media align-items-center">
                      <img src="{{asset($item->background_url)}}" alt="" style="width: 100px; height:70px;">
                      <div class="media-body pl-2">
                        <span class="name mb-0 text-sm">{{$item->title}}  </span>
                      </div>
                    </div>
                  </th>
                  <td>
                    <div class="d-flex align-items-center">
                      <div>
                        <p class="line-clamp-3">
                          <?= Str::limit($item->desc, 100, ' ...') ?>
                        </p>
                      </div>
                    </div>
                  </td>
                  <td class="text-right">
                    <div class="dropdown">
                      <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        @if ($item->file_pdf != NULL)
                          <a class="dropdown-item" href="{{ route('blogs.show',['blog' => $item->id]) }}">Lihat Dokumen</a>
                        @endif
                        <a class="dropdown-item" href="{{ route('blogs.edit',['blog' => $item->id]) }}">Edit Berita</a>

                          <form action="{{route('blogs.destroy',['blog' => $item->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="dropdown-item">Hapus Berita</button>
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
