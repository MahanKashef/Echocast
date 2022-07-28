@extends('Together.admin.admin')

@section('content')
    

        <section class="pt-3 pb-1 mb-2 border-bottom">
    <h1 class="h5">Create Menus</h1>
</section>

<section class="row my-3">
    <section class="col-12">

      <!--  <form method="post" action="http://localhost/Lasting_flavors/podcast/store" enctype="multipart/form-data" > -->
        <form method="post" action="/admin/menus/store" enctype="multipart/form-data" >
            @csrf

            <div class="form-group">
                <label for="menu">Menu</label>
                <input type="text" class="form-control" id="menu" name="menu" placeholder="Enter Menu ..." required autofocus>
            </div>


            <button type="submit" class="btn btn-primary btn-sm">store</button>
        </form>
    </section>
</section>

@endsection
