@extends('Together.admin.admin')

@section('content')
    

        <section class="pt-3 pb-1 mb-2 border-bottom">
    <h1 class="h5">Login</h1>
</section>

<section class="row my-3">
    <section class="col-12">

      <!--  <form method="post" action="http://localhost/Lasting_flavors/podcast/store" enctype="multipart/form-data" > -->
        <form method="post" action="/admin/user/check" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email"  class="form-control" id="email" name="email" placeholder="Email ..." rows="3" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password ..." required autofocus>
            </div>

            <button type="submit" class="btn btn-primary btn-sm">store</button>
        </form>
    </section>
</section>

{{-- Box alert --}}

{{-- <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script> --}}

{{-- Show bottom of page --}}

  @if(session()->has('message'))
  <div class="alert {{session('alert') ?? 'alert-danger'}}">
      {{ session('message') }}
  </div>
@endif


@endsection
