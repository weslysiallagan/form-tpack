@extends('admin.admin')

@section('content')
<!-- Button trigger modal -->
<div class="col-md-11 d-flex flex-row-reverse mr-4 mb-4">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahPertanyaan">
        Add Data
    </button>
</div>

<div class="col-md-12">
  <table class="table table-hover">
      <thead>
      <tr>
          <th scope="col">Nama Komponen</th>
          <th scope="col">Pertanyaan</th>
          <th scope="col">Aksi</th>
      </tr>
      </thead>
      <tbody>
        @if($pertanyaan->count() > 0)
        @forelse ($pertanyaan as $pert)
          <tr>
              <td scope="row">
                  {{ $pert->komponen->nama_komponen}}
              </td>
              <td>
                  {{ $pert->pertanyaan }}
              </td>
              <td>
                  <button class="btn btn-sm btn-success">Edit</button>
                  <button class="btn btn-sm btn-danger">Delete</button>
              </td>
              
          </tr>
          @empty
          Tidak ada Data
          @endforelse
          @endif
      </tbody>
  </table>
  <div class="d-flex flex-row-reverse">
      {{ $pertanyaan->links() }}
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="tambahPertanyaan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Pertanyaan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/admin/tabelpertanyaan" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Nama Komponen</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="id_komponen">
                        @forelse($komponen as $komp)
                      <option value="{{$komp->id}}">{{$komp->nama_komponen}}</option>
                      @empty
                      Data kosong
                    @endforelse
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="pertanyaan">Pertanyaan</label>
                    <input type="text" class="form-control" id="pertanyaan" name="pertanyaan">
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
            
      </div>
    </div>
  </div>


@endsection