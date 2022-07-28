@extends('Together.admin.admin')

@section('content')
    
        <section class="pt-3 pb-1 mb-2 border-bottom">
    <h1 class="h5">Edit Podcast</h1>
</section>
<section class="row my-3">
    <section class="col-12">
        <?php foreach($podcast as $items) { ?>
            <?php $items = (array) $items ; ?>
       <!-- <form method="post" action="http://localhost/Lasting_flavors/podcast/update/<?php // echo $id;?>"
              enctype="multipart/form-data"> -->
        <?php //dd($items['id']); ?>
        <form method="POST" action="/admin/podcast/update/<?php echo $items['id'];?>" enctype="multipart/form-data">
              @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title ..."
                       value=<?php  echo $items['title'];?>>
            </div>

            <div class="form-group">
                <label for="menu_id">Menu</label>
                <select name="menu_id" id="menu_id" class="form-control"  autofocus>
                    <?php // foreach ($menus as $menu) { ?>
                    <option value="<?php  echo $items['menu_id']?>"><?php // echo $menu['name']; ?></option>
<?php //} ?>
                </select>
            </div>

            <div class="form-group">
                <label for="card-id">Card</label>
                <select name="card-id" id="card-id" class="form-control"  autofocus>
                    <?php// foreach ($menus as $menu) { ?>
                        <option value="<?php // echo $items['card_id']?>"><?php // echo $menu['name']; ?></option>
                    <?php //} ?>

                </select>
            </div>

            <div class="form-group">
                <label for="summary">summary</label>
                <textarea class="form-control" id="summary" name="summary" placeholder="summary ..." rows="3"><?php
                   echo $items['summary'];?></textarea>
            </div>
            <hr>
            <div class="form-group">
                <img style="width: 100px;" src=<?php echo $items['PFP'] ?>  alt="">
                <br>
                <label for="PFP">Image</label> 
                <input type="file" id="PFP" name="PFP" class="form-control-file" autofocus>
            </div>
            <hr/>

            <div class="form-group">
                <audio controls>
                    <source src=<?php echo $items['AFP']; ?> type="audio/mpeg">
                    <source src=<?php echo $items['AFP']; ?> type="audio/ogg">
                    <source src=<?php echo $items['AFP']; ?> type="audio/mp3">
                </audio>
                <br>
                <label for="AFP">Audio</label>
                <input type="file" id="AFP" name="AFP" class="form-control-file"  autofocus>
            </div>
            
            
            <button type="submit" class="btn btn-primary btn-sm">update</button>
        </form>
        <?php }?>
    </section>
</section>

@endsection

