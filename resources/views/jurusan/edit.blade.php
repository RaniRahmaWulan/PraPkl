@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <div class="card border-secondary">
           
                <div class="card-header mb-3">Data siswa </div>

                    <div class="card-body">
                        <form action="{{ route('jurusan.update', $jurusan->id) }}" method="post">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="">Kode mapel</label>
                                <input type="text" name="kode_mapel" value="{{ $jurusan->kode_mapel }}"
                                    class="form-control @error('nis') is-invalid @enderror">
                                @error('kode_mapel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Nama mapel</label>
                                <textarea type="text"name="nama_mapel" class="form-control @error('nama_mapel') is-invalid @enderror">{{ $jurusan->nama_mapel }}
                                </textarea>
                                @error('nama_mapel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Semester</label>
                                <textarea type="text"name="semester" class="form-control @error('semester') is-invalid @enderror">{{ $jurusan->semester }}
                                </textarea>
                                @error('semester')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Jurusan</label>
                                <textarea type="date"name="jurusan" class="form-control @error('jurusan') is-invalid @enderror">{{ $jurusan->jurusan }}
                                </textarea>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection