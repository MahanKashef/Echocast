@extends('Together.admin.admin')

@section('content')
    

        <section class="pt-3 pb-1 mb-2 border-bottom">
    <h1 class="h5">Create podcast</h1>
</section>

<section class="row my-3">
    <section class="col-12">

      <!--  <form method="post" action="http://localhost/Lasting_flavors/podcast/store" enctype="multipart/form-data" > -->
        <form method="post" action="/admin/podcast/store" enctype="multipart/form-data" >
            {{ @csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title ..." required autofocus>
            </div>

            <div class="form-group">
                <label for="menu_id">Menu</label>
                <select name="menu_id" id="menu_id" class="form-control"  autofocus>
                    <?php foreach ($menus as $menu) { 
                        $menu = (array) $menu; ?>
                        <option value="<?php echo $menu['menu']?>"><?php echo $menu['menu']; ?></option>
                    <?php } ?>

                </select>
            </div>

            <div class="form-group">
                <label for="guest_id">Guest</label>
                <select name="guest_id" id="guest_id" class="form-control"  autofocus>
                    <?php foreach ($guests as $guest) { 
                        $guest = (array) $guest; ?>
                        <option value="<?php echo $guest['name']?>"><?php echo $guest['name']; ?></option>
                    <?php } ?>

                </select>
            </div>

            <div class="form-group">
                <label for="summary">summary</label>
                <textarea class="form-control" id="summary" name="summary" placeholder="summary ..." rows="3" required autofocus></textarea>
            </div>

            <div class="form-group">
                <label for="PFP">Image</label>
                <input type="file" id="PFP" name="PFP" class="form-control-file" required autofocus>
            </div>

            <div class="form-group">
                <label for="AFP">Audio</label>
                <input type="file" id="AFP" name="AFP" class="form-control-file" required autofocus>
            </div>


            <button type="submit" class="btn btn-primary btn-sm">store</button>
        </form>
    </section>
</section>

@endsection
