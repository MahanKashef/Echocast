@extends('Together.admin.admin')

@section('content')
    
        <section class="pt-3 pb-1 mb-2 border-bottom">
    <h1 class="h5">Edit item</h1>
</section>
<section class="row my-3">
    <section class="col-12">
        <?php foreach($dev as $item) ; $item = (array) $item; ?>
       <!-- <form method="post" action="http://localhost/Lasting_flavors/item/update/<?php // echo $id;?>"
              enctype="multipart/form-data"> -->
        <form method="POST" action="/admin/dev/update/<?php echo $item['id'];?>"
              enctype="multipart/form-data">
              @csrf
            <div class="form-group">

                <div class="form-group">
                    <label for="des">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $item['name'];?>  "placeholder="Enter dev name ..." required autofocus>
                </div>

                <div class="form-group">
                    <img style="width: 100px;" src="<?php echo $item['img'];?>" alt="">
                    <label for="img">Image</label>
                    <input type="file" id="img" name="img" class="form-control-file" autofocus>
                </div>

                <div class="form-group">
                    <label for="des">Description</label>
                    <textarea class="form-control" id="des" name="des" placeholder="Writing dev des ..." rows="3" required autofocus><?php
                        echo $item['des'];?></textarea>
                </div>
    
                <hr>
    
                <br>
                Socials
                <hr>
    
                <div class="form-group">
                    <label for="gmail">Gmail</label>
                    <input type="email" class="form-control" id="gmail" name="gmail" value="<?php
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

