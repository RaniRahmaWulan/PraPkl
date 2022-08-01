@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Siswa
                        <a href="{{ route('jurusan.create') }}"
                            class="btn btn-sm btn-primary" style="float: right;">Add Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <td>no</td>
                                        <th>Kode mata pelajaran</th>
                                        <th>Nama mata pelajaran</th>
                                        <th>semester</th>
                                        <th>Jurusan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($jurusan as $data)
                                        <tr>
                                        <td>{{ $no++ }}</td>
                                            <td>{{ $data->kode_mapel }}</td>
                                            <td>{{ $data->nama_mapel }}</td>
                                            <td>{{ $data->semester }}</td>
                                            <td>{{ $data->jurusan }}</td>
                                            <td>
                                                <form action="{{ route('jurusan.destroy', $data->id) }}" method="siswa">
                                                    @method('delete')
                                                    @csrf
                                                    <a href="{{ route('jurusan.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">Edit
                                                    </a> |
                                                    <a href="{{ route('jurusan.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-info">Show
                                                    </a>
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Are You Sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection