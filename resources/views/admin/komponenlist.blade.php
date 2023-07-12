@extends('admin.admin')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nama Komponen</th>
            <th scope="col">Jumlah Pertanyaan</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($komponen as $kom)
        <tr>
            <td scope="row">
                {{ $kom->nama_komponen }}
            </td>
            <td>
                {{count($kom->pertanyaan)}}
            </td>
        </tr>
        @empty
        Data Komponen Belum Diinputkan
        @endforelse
        </tbody>
    </table>
@endsection