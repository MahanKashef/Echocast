@extends('Together.admin.admin')

@section('content')
    
        <section class="pt-3 pb-1 mb-2 border-bottom">
    <h1 class="h5">Edit items</h1>
</section>
<section class="row my-3">
    <section class="col-12">
        <?php foreach($guest as $items){
            $items = (array) $items;
        ?>
       <!-- <form method="post" action="http://localhost/Lasting_flavors/items/update/<?php // echo $id;?>"
              enctype="multipart/form-data"> -->
        <form method="post" action="/admin/guest/update/<?php  echo $items['id'];?>"
              enctype="multipart/form-data">
              @csrf
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php
                 echo $items['name'];?>" placeholder="Enter name of guest ..." required autofocus>
            </div>

            <div class="form-group">
                <img style="width: 100px;" src="<?php echo $items['img'];?>" alt="">
                <hr/>
                <label for="image">Image</label>
                <input type="file" id="image" name="image" class="form-control-file" autofocus>
            </div>

            <hr>

            <div class="form-group">
                <label for="res">Responsibility</label>
                <textarea class="form-control" id="res" name="res" placeholder="Enter Responsibility ..." rows="3" required autofocus><?php
                     echo $items['res'];?></textarea>
            </div>

            <hr>

            <div class="form-group">
                <label for="story">Story</label>
                <textarea class="form-control" id="story" name="story" placeholder="Enter Story of Guest ..." rows="3" required autofocus><?php
                    echo $items['story'];?></textarea>
            </div>

            <br>
            Socials
            <hr>

            <div class="form-group">
                <label for="gmail">Gmail</label>
                <input type="text" class="form-control" id="gmail" name="gmail" value="<?php
                 echo $items['gmail'];?>" placeholder="Enter gmail of guest ..." required autofocus>
            </div>

            <div class="form-group">
                <label for="facebook">Facebook</label>
                <input type="text" class="form-control" id="facebook" name="facebook" value="<?php
                 echo $items['facebook'];?>" placeholder="Enter facebook of guest ..."  autofocus>
            </div>

            <div class="form-group">
                <label for="linkedin">Linkedin</label>
                <input type="text" class="form-control" id="linkedin" name="linkedin" value="<?php
                 echo $items['linkedin'];?>" placeholder="Enter linkedin of guest ..."  autofocus>
            </div>

            <div class="form-group">
                <label for="twitter">twitter</label>
                <input type="text" class="form-control" id="twitter" name="twitter" value="<?php
                 echo $items['twitter'];?>" placeholder="Enter twitter of guest ..."  autofocus>
            </div>

            <div class="form-group">
                <label for="insta">Instagram</label>
                <input type="text" class="form-control" id="insta" name="insta" value="<?php
                echo $items['insta'];?>" placeholder="Enter Instagram of guest ..."  autofocus>
            </div>

            
            <button type="submit" class="btn btn-primary btn-sm">update</button>
        </form>

        <?php }?>

    </section>
</section>

@endsection

