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
      <div class="col-xl-10 order-xl-1">
        <div class="card">
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col-10">
                <h3 class="mb-0">Detail Peserta </h3>
              </div>

            </div>
          </div>
          <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{route('contestants.update', $userdetail->id)}}">
              @csrf
              @method('PUT')

              <h6 class="heading-small text-muted mb-4">Informasi Pribadi</h6>
              <div class="pl-lg-4">

                {{-- success --}}
                @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
                @endif

                {{-- Nama --}}
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-name">Nama Peserta</label>
                      <input type="text" id="input-name" name="name" class="form-control" value="{{$userdetail->users->name}}" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-initial">Asal Sekolah</label>
                        <select id="school" name="id_academy"class="form-control" required>
                            {{-- @foreach ($academy as $item)
                                <option value={{ $item->id }}>{{$item->academy_name}}</option>
                            @endforeach --}}
                            @foreach ($academy as $value)
                            <option value="{{ $value->id }}" {{ ( $value->id == $userdetail['id_academy']) ? 'selected' : '' }}>
                                {{ $value->academy_name }}
                            </option>
                        @endforeach
                        </select>
                    </div>
                  </div>
                </div>

                {{-- Pendataran --}}
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-date-open">Tanggal Lahir</label>
                      <input type="date" id="input-date-open" class="form-control" name="birth_date" value={{$userdetail->birth_date}} required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-date-close">NIM</label>
                      <input type="text" id="input-date-close" name="identity_code" class="form-control" value={{$userdetail->identity_code}} required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-date-open">Nomor Telephone</label>
                      <input type="number" id="input-date-open" name="phone" class="form-control" value={{$userdetail->phone}} required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-date-open">Tingkat Pendidikan</label>
                      <input type="text" id="input-date-open" name="edu_stage" class="form-control" value= "Semester {{$userdetail->edu_stage}}" required>
                    </div>
                  </div>

                </div>

                {{-- Target --}}
                <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-targe">Jurusan</label>
                        <input type="text" id="input-target" name="department" class="form-control" value={{$userdetail->department}} required>
                      </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" >Alamat</label>
                          <textarea rows="1" id="addres" name="adress" placeholder="Input Your Address"
                          class="form-control" required>{{$userdetail->adress}} </textarea>
                        </div>
                      </div>

                  </div>

                  <button type="submit" class="btn btn-warning w-100">Simpan Data</button>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
