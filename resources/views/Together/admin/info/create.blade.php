@extends('Together.admin.admin')

@section('content')
    

        <section class="pt-3 pb-1 mb-2 border-bottom">
    <h1 class="h5">Make Informaions</h1>
</section>

<section class="row my-3">
    <section class="col-12">

      <!--  <form method="post" action="http://localhost/Lasting_flavors/podcast/store" enctype="multipart/form-data" > -->
        <form method="post" action="/admin/info/store" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                <label for="bc">Background Image</label>
                <input type="file" id="bc" name="bc" class="form-control-file" required autofocus>
            </div>

            <div class="form-group">
                <label for="logo">Logo</label>
                <input type="file" id="logo" name="logo" class="form-control-file" required autofocus>
            </div>

            <div class="form-group">
                <label for="about">About us</label>
                <textarea class="form-control" id="about" name="about" placeholder="Writing About us ..." rows="3" required autofocus></textarea>
            </div>

            <div class="form-group">
                <label for="num1">Number1</label>
                <input type="number" class="form-control" id="num1" name="num1" placeholder="Enter Number1 ..." required autofocus>
            </div>

            <div class="form-group">
                <label for="num2">Number2</label>
                <input type="number" class="form-control" id="num2" name="num2" placeholder="Enter Number2 ..." required autofocus>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address ..." required autofocus>
            </div>

            <br>
            Socials
            <hr>
            
            <div class="form-group">
                <label for="gmail">Gmail</label>
                <input type="text" class="form-control" id="gmail" name="gmail" placeholder="Enter gmail of guest ..." required autofocus>
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
