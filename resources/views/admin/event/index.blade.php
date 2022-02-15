@extends('layouts.admin')

@section('content')

<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-12 col-12 text-right">
            <a href="{{route('events.create')}}" class="btn btn-sm btn-neutral">Tambah Cabang Lomba</a>
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
            <h3 class="mb-0">Cabang Lomba</h3>
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
                  <th scope="col" class="sort" data-sort="name">Cabang Lomba</th>
                  <th scope="col" class="sort" data-sort="date">Tanggal Technical</th>
                  <th scope="col" class="sort" data-sort="budget">Biaya Pendaftaran</th>
                  <th scope="col" class="sort" data-sort="status">Target Peserta</th>
                  <th scope="col" class="sort" data-sort="completion">Persentase Peserta</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody class="list">
                @foreach ($data as $item)
                <tr>
                  <th scope="row">
                    <div class="media align-items-center">
                      <a href="#" class="avatar rounded-circle mr-3 shadow-lg">
                        <img alt="Image placeholder" src="{{asset($item->icon_url)}}" class="p-2">
                      </a>
                      <div class="media-body">
                        <span class="name mb-0 text-sm">{{$item->event_name}} ({{ $item['year'] }})  </span>
                      </div>
                    </div>
                  </th>
                  <td class="date">
                    @if ($item->tm_time == NULL)
                        -
                    @else

                      {{$item->tm_time}}
                    @endif
                  </td>
                  <td class="budget">
                    @if ($item->registration_fee == NULL)
                        -
                    @else
                      Rp {{number_format($item->registration_fee,0,',','.')}}
                    @endif
                  </td>
                  <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-warning"></i>
                      <span class="status">{{$item->max_slot}}</span>
                    </span>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <?php $per = (count($item->users)/$item->max_slot)*100 ?>
                      <span class="completion mr-2">{{$per}}%</span>
                      <div>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow={{1}} aria-valuemin="0" aria-valuemax="100" style="width: {{$per}}%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="text-right">
                    <div class="dropdown">
                      <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        @if ($item->tm_time == NULL)
                          <a class="dropdown-item" href={{route('tm.edit',['tm' => $item->id])}}>Atur Technical Meeting</a>
                        @else
                          <a class="dropdown-item" href={{route('tm.edit',['tm' => $item->id])}}>Edit Technical Meeting</a>
                        @endif
                        {{-- @if ($item->registration_fee == NULL)
                          <a class="dropdown-item" href="#">Atur Biaya Pendaftaran</a>
                        @else
                          <a class="dropdown-item" href="#">Edit Biaya Pendaftaran</a>
                        @endif --}}
                        <a class="dropdown-item" href="{{ route('lihat_peserta',$item->id) }}">Lihat Peserta Lomba</a>
                        <a class="dropdown-item" href="{{ route('cetak_pdf',$item->id) }}">Unduh Peserta Lomba</a>
                        <a class="dropdown-item" href="{{ route('events.edit',$item->id) }}">Edit Lomba</a>
                        {{-- <a class="dropdown-item" href="#">Tutup Pendaftaran</a> --}}
                          <form action="{{route('events.destroy',['event' => $item->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="dropdown-item">Hapus Lomba</button>
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
