@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Siswa </div>

                    <div class="card-body">

                        <div class="mb-3">
                            <label for="">Kode mapel</label>
                            <input type="text" name="kode_mapel" value="{{ $jurusan->kode_mapel }}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="">nama mapel</label>
                            <textarea type="text"name="nama_mapel" class="form-control" readonly>{{ $jurusan->nama_mapel }} </textarea>

                        </div>
                        <div class="mb-3">
                            <label for="">Semester</label>
                            <textarea type="text"name="semester" class="form-control" readonly>{{ $jurusan->semester }} </textarea>

                        </div>
                        <div class="mb-3">
                            <label for="">Jurusan</label>
                            <textarea type="text"name="jurusan" class="form-control" readonly>{{ $jurusan->jurusan }} </textarea>

                        </div>

                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('jurusan.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection