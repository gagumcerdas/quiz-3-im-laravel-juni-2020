@extends('layouts.master')

@section('content')
    <div class="mt-3">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Detail Artikel</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <h3>Judul : {{ $artikel->judul}}</h3>
                <p>Isi : {{ $artikel->isi}}</p>
                <p>Slug : {{ $artikel->slug}}</p>
                <p>Tag : {{ $artikel->tag}}</p>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
@endsection
