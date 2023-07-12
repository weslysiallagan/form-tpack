<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>FORM PERTANYAAN</title>
</head>
<body>

    <div class="page-title">
        <h1>PENGUKURAN ELEARNING READINESS TPACK</h1>
        <ul>
            <li>Data Diri</li>
            <li>Komponen 1</li>
            <li>Komponen 2</li>
            <li>Komponen 3</li>
            <li>Komponen 4</li>
            <li>Komponen 5</li>
            <li>Komponen 6</li>
            <li>Komponen 7</li>
            {{-- @forelse ($komponen as $kom)
            <li id="komponen-{{$kom->id}}">{{ $kom->nama_komponen }}</li>    
            @empty
            Data Komponen Belum Diinputkan
            @endforelse --}}
        </ul>
    </div>

    <div class="mb-3">
        <a class="btn btn-danger" href="/logout">LOGOUT</a>
    </div>
</body>