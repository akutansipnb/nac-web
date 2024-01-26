@extends('layouts.dash-user')
@section('content')
<div class="header bg-primary pb-7">

</div>
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Cross Time</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Cross Time</th>
                    <th scope="col" class="sort" data-sort="budget">Date</th>
                    <th scope="col">Description</th>
                  </tr>
                </thead>
                <tbody class="list">
                @foreach ($data as $item)
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">{{ $item->schedule }}</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                        {{$item->date_start}} - {{$item->date_end}}
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">{{$item->desc}}</span>
                      </span>
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


