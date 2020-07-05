@extends('layouts.master')

@section('content')
    <div class="mt-3">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Artikel</h3>
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <a href="/artikel/create" class="btn btn-primary">Input Artikel</a>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul artikel</th>
                    <th>Isi artikel</th>
                    <th>Slug artikel</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($artikels as $key => $item)
                        <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->judul}}</td>
                        <td>{{ $item->isi}}</td>
                        <td>{{ $item->slug}}</td>
                        <td>
                        <a href="/artikel/{{$item->artikel_id}}" class="btn btn-sm btn-info">Detail</a>
                        <a href="/artikel/{{$item->artikel_id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                        <form action="/artikel/{{$item->artikel_id}}" method="post" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
@endsection

@push('scripts')
<script>
    function myFunction() {
        Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
    }
</script>
@endpush

