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

    <div class="page-title col-12 mt-4 p-4" style="background-color: rgb(255, 0, 55)">
        <div class="col-12">
            <h1 class="d-flex justify-content-center mb-4">PENGUKURAN ELEARNING READINESS TPACK</h1>            
            <div class="row d-flex justify-content-center">
                <div class="col-8">
                    <div class="list-group" id="list-tab" role="tablist">
                        <ul class="list-inline d-flex justify-content-center">
                            <a class="list-group-item list-group-item-action" href="#data-diri" role="tab" data-toggle="list">Data Diri</a>
                            @forelse ($komponen as $kom)
                            <a class="list-group-item list-group-item-action" href="#{{$kom->nama_komponen}}" id="komponen-{{$kom->id}}" role="tab" data-toggle="list">{{ $kom->nama_komponen }}</a>
                            {{-- <li class="list-unstyled list-inline-item"><a href="" id="komponen-{{$kom->id}}">{{ $kom->nama_komponen }}</a></li>     --}}
                            @empty
                            Data Komponen Belum Diinputkan
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="tab-content" id="nav-tabContent">
                <section class="content">
                    @yield('content')
                </section>    
            </div>    
        </div>       
    </div>

    <div class="mb-3">
        <a class="btn btn-danger" href="/logout">LOGOUT</a>
    </div>
</body>