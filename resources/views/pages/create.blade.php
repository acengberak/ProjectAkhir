@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Travel Package</h1>
    </div>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('gallery.store') }}" method="post">
                         @csrf
                         {{-- TITTLE --}}
                            <div class="form-group">
                              <label for="title">Title</label>
                              <input type="text" name="title" id="title" class="form-control" placeholder="Isi Title" aria-describedby="helpId" value="{{ old('title') }}">
                              <small id="helpId" class="text-muted">Title</small>
                            </div>
                         {{-- LOCATION --}}
                         <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" name="location" id="location" class="form-control" placeholder="Isi Lokasi" aria-describedby="helpId" value="{{ old('location') }}">
                            <small id="helpId" class="text-muted">Lokasi</small>
                          </div>
                          {{-- About --}}
                          <div class="form-group">
                            <label for="about">About</label>
                            <textarea name="about" id="about" class="form-control" placeholder="Isi About" aria-describedby="helpId" value="{{ old('about') }}" rows="10"></textarea>
                            <small id="helpId" class="text-muted">About</small>
                          </div>
                          {{-- FEATURED EVENT --}}
                          <div class="form-group">
                            <label for="featured_event">Featured Event</label>
                            <input type="text" name="featured_event" id="featured_event" class="form-control" placeholder="Featured Event" aria-describedby="helpId" value="{{ old('featured_event') }}">
                            <small id="helpId" class="text-muted">Featured Event</small>
                          </div>
                          {{-- Language --}}
                          <div class="form-group">
                            <label for="language">Language</label>
                            <input type="text" name="language" id="language" class="form-control" placeholder="Isi Language" aria-describedby="helpId" value="{{ old('language') }}">
                            <small id="helpId" class="text-muted">Language</small>
                          </div>
                          {{-- FOODS --}}
                          <div class="form-group">
                            <label for="foods">Foods</label>
                            <input type="text" name="foods" id="foods" class="form-control" placeholder="Isi Foods" aria-describedby="helpId" value="{{ old('foods') }}">
                            <small id="helpId" class="text-muted">Foods</small>
                          </div>
                          {{-- DEPARTURE DATE --}}
                          <div class="form-group">
                            <label for="departure_date">Departure Date</label>
                            <input type="date" name="departure_date" id="departure_date" class="form-control" placeholder="Isi Departure Date" aria-describedby="helpId" value="{{ old('departure_date') }}">
                            <small id="helpId" class="text-muted">Departure Date</small>
                          </div>
                          {{-- DURATION --}}
                          <div class="form-group">
                            <label for="duration">Duration</label>
                            <input type="text" name="duration" id="duration" class="form-control" placeholder="Isi Duration" aria-describedby="helpId" value="{{ old('duration') }}">
                            <small id="helpId" class="text-muted">Duration</small>
                          </div>
                          {{-- TYPE --}}
                          <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" name="type" id="type" class="form-control" placeholder="Isi Type" aria-describedby="helpId" value="{{ old('type') }}">
                            <small id="helpId" class="text-muted">Type</small>
                          </div>
                          {{-- PRICE --}}
                          <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price" class="form-control" placeholder="Isi Price" aria-describedby="helpId" value="{{ old('price') }}">
                            <small id="helpId" class="text-muted">Price</small>
                          </div>
                          <a href="">
                           <script> alert('Data tersimpan')<button type="submit" class="btn btn-primary btn-block">Simpan</button></script>
                          </a>
                          
                        </form>
                          {{-- save alert --}}
                          {{-- <script>
                            var msg = '{{Session::get('alert')}}';
                            var exist = '{{Session::has('alert')}}';
                            if (exist) {alert(msg);}
                        </script> --}}
                        {{-- end alert  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
