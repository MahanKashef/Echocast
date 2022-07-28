@extends('Together.admin.admin')

@section('content')
    

        <section class="pt-3 pb-1 mb-2 border-bottom">
    <h1 class="h5">Make Developers</h1>
</section>

<section class="row my-3">
    <section class="col-12">

      <!--  <form method="post" action="http://localhost/Lasting_flavors/podcast/store" enctype="multipart/form-data" > -->
        <form method="post" action="/admin/dev/store" enctype="multipart/form-data" >
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter dev name ..." required autofocus>
            </div>

            <div class="form-group">
                <label for="img">Image</label>
                <input type="file" id="img" name="img" class="form-control-file" required autofocus>
            </div>

            <div class="form-group">
                <label for="des">Description</label>
                <textarea type="text"  class="form-control" id="des" name="des" placeholder="Writing dev description ..." rows="3" required autofocus></textarea>
            </div>

            <br>
            Socials
            <hr>
            
            <div class="form-group">
                <label for="gmail">Gmail</label>
                <input type="email" class="form-control" id="gmail" name="gmail" placeholder="Enter gmail of guest ..." required autofocus>
            </div>

            <div class="form-group">
                <label for="facebook">Facebook</label>
                <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Enter facebook of guest ..."  autofocus>
            </div>

            <div class="form-group">
                <label for="linkedin">Linkedin</label>
                <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Enter linkedin of guest ..."  autofocus>
            </div>

            <div class="form-group">
                <label for="twitter">twitter</label>
                <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Enter twitter of guest ..."  autofocus>
            </div>

            <div class="form-group">
                <label for="insta">Instagram</label>
                <input type="text" class="form-control" id="insta" name="insta" placeholder="Enter Instagram of guest ..."  autofocus>
            </div>

            <button type="submit" class="btn btn-primary btn-sm">store</button>
        </form>
    </section>
</section>

@endsection
