@extends('Together.admin.admin')

@section('content')
    
        <section class="pt-3 pb-1 mb-2 border-bottom">
    <h1 class="h5">Edit item</h1>
</section>
<section class="row my-3">
    <section class="col-12">
        <?php foreach($info as $item) ; $item = (array) $item; ?>
       <!-- <form method="post" action="http://localhost/Lasting_flavors/item/update/<?php // echo $id;?>"
              enctype="multipart/form-data"> -->
        <form method="POST" action="/admin/info/update/<?php echo $item['id'];?>"
              enctype="multipart/form-data">
              @csrf
            <div class="form-group">

                <div class="form-group">
                    <img style="width: 100px;" src="<?php echo $item['bchome'];?>" alt="">
                    <label for="bc">Background Image</label>
                    <input type="file" id="bc" name="bc" class="form-control-file" autofocus>
                </div>

                <div class="form-group">
                    <img style="width: 100px;" src="<?php echo $item['logo'];?>" alt="">
                    <label for="logo">Logo</label>
                    <input type="file" id="logo" name="logo" class="form-control-file" autofocus>
                </div>

                <div class="form-group">
                    <label for="about">About us</label>
                    <textarea class="form-control" id="about" name="about" placeholder="Writing About us ..." rows="3" required autofocus><?php
                        echo $item['about'];?></textarea>
                </div>

                <div class="form-group">
                    <label for="num1">Number1</label>
                    <input type="number" class="form-control" id="num1" name="num1"  value="<?php
                       echo $item['number1'];?>"    placeholder="Enter Number1 ..." required autofocus>
                </div>
    
                <div class="form-group">
                    <label for="num2">Number2</label>
                    <input type="number" class="form-control" id="num2" name="num2" value="<?php
                       echo $item['number2'];?>" placeholder="Enter Number2 ..." required autofocus>
                </div>
    
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="<?php echo $item['address'];?>  "placeholder="Enter Address ..." required autofocus>
                </div>
    
                <hr>
    
                <br>
                Socials
                <hr>
    
                <div class="form-group">
                    <label for="gmail">Gmail</label>
                    <input type="text" class="form-control" id="gmail" name="gmail" value="<?php
                     echo $item['gmail'];?>" placeholder="Enter gmail of guest ..." required autofocus>
                </div>
    
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" class="form-control" id="facebook" name="facebook" value="<?php
                     echo $item['facebook'];?>" placeholder="Enter facebook of guest ..."  autofocus>
                </div>
    
                <div class="form-group">
                    <label for="linkedin">Linkedin</label>
                    <input type="text" class="form-control" id="linkedin" name="linkedin" value="<?php
                     echo $item['linkedin'];?>" placeholder="Enter linkedin of guest ..."  autofocus>
                </div>
    
                <div class="form-group">
                    <label for="twitter">twitter</label>
                    <input type="text" class="form-control" id="twitter" name="twitter" value="<?php
                     echo $item['twitter'];?>" placeholder="Enter twitter of guest ..."  autofocus>
                </div>
    
                <div class="form-group">
                    <label for="insta">Instagram</label>
                    <input type="text" class="form-control" id="insta" name="insta" value="<?php
                     echo $item['insta'];?>" placeholder="Enter Instagram of guest ..."  autofocus>
                </div>
            
            <button type="submit" class="btn btn-primary btn-sm">update</button>
        </form>
    </section>
</section>

@endsection

