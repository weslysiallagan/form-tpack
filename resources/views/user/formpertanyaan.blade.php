@extends('user.form')

@section('content')

    @forelse ($komponen as $kom)
    @empty
    Data Komponen Belum Diinputkan
    @endforelse

    <div class="container col-10 p-4"  style="background-color: brown">
        <div class="sub-container p-4 m-4" style="background-color: white">
            <div class="row">
                <div class="col-8 m-3 d-flex justify-content-center">
                    <h2>DAFTAR PERTANYAAN</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="row col-9 m-2" style="background-color: aqua">
                    @forelse ($pertanyaan as $pert)
                    <div class="m-4">
                        @if($kom->nama_komponen == 'Komponen PK')
                            {{ $pert->pertanyaan->where($pert->id_komponen == 'Komponen PK')}};
                        @elseif($kom->nama_komponen == 'Komponen CK')
                            {{ $pert->pertanyaan->where($pert->id_komponen == 'Komponen CK')}};
                        @elseif($kom->nama_komponen == 'Komponen TK')
                            {{ $pert->pertanyaan->where($pert->id_komponen == 'Komponen TK')}};
                        @elseif($kom->nama_komponen == 'Komponen PCK')
                            {{ $pert->pertanyaan->where($pert->id_komponen == 'Komponen PCK')}};
                        @elseif($kom->nama_komponen == 'Komponen TPK')
                            {{ $pert->pertanyaan->where($pert->id_komponen == 'Komponen TPK')}};
                        @elseif($kom->nama_komponen == 'Komponen TCK')
                            {{ $pert->pertanyaan->where($pert->id_komponen == 'Komponen TCK')}};
                        @elseif($kom->nama_komponen == 'Komponen TPCK')
                            {{ $pert->pertanyaan->where($pert->id_komponen == 'Komponen CK')}};
                        @endif
                            
                    </div>
                    <div class="mb-4">
                        <form>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="customRadio1" name="skor" class="custom-control-input" value="1">
                                <label class="custom-control-label" for="skor1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="customRadio2" name="skor" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="skor2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="customRadio3" name="skor" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="skor3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="customRadio4" name="skor" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="skor4">4</label>
                            </div>
                            @empty
                            Data Komponen Belum Diinputkan
                            @endforelse
                            <br>
                            <button type="submit" class="btn btn-danger mr-4 mt-4">Kembali ke Komponen {{$kom->nama_komponen}}</button>
                            <button type="submit" class="btn btn-danger mr-4 mt-4">Beralih ke Komponen {{$kom->nama_komponen}}</button>
                            <button type="submit" class="btn btn-primary mt-4">Simpan Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection