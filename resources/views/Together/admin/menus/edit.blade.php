@extends('Together.admin.admin')

@section('content')
    
        <section class="pt-3 pb-1 mb-2 border-bottom">
    <h1 class="h5">Edit Menus</h1>
</section>
<section class="row my-3">
    <section class="col-12">
       <!-- <form method="post" action="http://localhost/Lasting_flavors/item/update/<?php // echo $id;?>"
              enctype="multipart/form-data"> -->
              <?php foreach($menu as $items) {
                $items = (array) $items;
             ?>
        <form method="POST" action="/admin/menus/update/<?php echo $items['id'];?>"
              enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="menu">Menu</label>
                    <input type="text" class="form-control" id="menu" name="menu" value="<?php
                        echo $items['menu'];?>" placeholder="Enter Menus ..." required autofocus>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">update</button>
        </form>
        <?php }?>
    </section>
</section>

@endsection

