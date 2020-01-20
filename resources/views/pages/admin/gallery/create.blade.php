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
        <h1 class="h3 mb-0 text-gray-800">Tambah Gallery</h1>
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
                        <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                         @csrf
                          <div class="form-group">
                            <label for="travel_packages_id">Paket Travel</label>
                            <select class="form-control" name="travel_packages_id" required>
                              <option value="">Pilih Paket</option>
                              @foreach ($travel_packages as $travel_package)
                                  <option value="{{ $travel_package->id }}">
                                    {{ $travel_package->title }}
                                  </option>
                              @endforeach
                            </select>
                          </div>
                            <div class="form-group">
                              <label for="images">Image</label>
                              <input type="file" name="images" id="images" placeholder="Masukkan gambar" class="form-controller">
                            </div>
                           <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
