@extends('layouts.master')

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

@section('content')
    <div class="mt-3">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Quiz 3 - Gagah Gumelar</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <img src="{{asset('images/quiz-laravel-3.png')}}" height="300px" alt="">
            </div>
            <!-- /.card-body -->
          </div>
    </div>
@endsection


