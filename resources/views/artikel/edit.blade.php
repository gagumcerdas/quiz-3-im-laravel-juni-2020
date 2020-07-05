@extends('layouts.master')

@section('content')
    <div class="mt-3">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Ubah Artikel</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
        <form role="form" action="/artikel/{{$artikel->artikel_id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                      <label for="isi">Judul Artikel</label>
                      <input type="text" class="form-control" id="judul" name="judul" value="{{ $artikel->judul }}" placeholder="Masukkan Isi">
                    </div>
                  </div>
                <div class="card-body">
                    <div class="form-group">
                      <label for="isi">Isi Artikel</label>
                      <input type="text" class="form-control" id="isi" name="isi" value="{{ $artikel->isi }}"placeholder="Masukkan Isi">
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="isi">Slug Artikel</label>
                      <input type="text" class="form-control" id="slug" name="slug" value="{{ $artikel->slug }}" placeholder="Masukkan Isi">
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="isi">Tag Artikel</label>
                      <input type="text" class="form-control" id="tag" name="tag" value="{{ $artikel->tag }}" placeholder="Masukkan Isi">
                    </div>
                  </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Ubah</button>
              </div>
            </form>
          </div>
    </div>

@endsection
