@extends('Together.admin.admin')

@section('content')

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h5 "><i class="fas fa-newspaper"></i> Guests</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <!--  <a role="button" href="http://localhost/Lasting_flavors/admin/guest/create" class="btn btn-sm btn-success">create</a> -->
        <a role="button" href="/admin/guest/create" class="btn btn-sm btn-success">create</a>
    </div>
</div>


<div class="table-responsive">
    <table class="table table-striped table-sm">
        <caption>List of guests</caption>
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>res</th>
                <th>story</th>
                <th>image</th>
                <th>gmail</th>
                <th>twitter</th>
                <th>linkedin</th>
                <th>insta</th>
                <th>facebook</th>
                <th>setting</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($guests as $guest) { 
                $guest = (array) $guest;
            ?>
            <tr>
                <!-- <td><a class="text-primary" href="http://localhost/Lasting_flavors/admin/guest/show/<?php // echo $guest['id'];
                ?>"><?php // echo $guest['id'] ?></a></td> -->
                <td><a class="text-primary" href="/admin/guest/show/<?php echo $guest['id'];
                    ?>"><?php echo $guest['id'] ?></a></td>
                <td><?php echo $guest['name'] ?></td>
                <td><?php  echo $guest['res'] ?></td>
                <td><?php echo $guest['story'] ?></td>
              <?php /*?>  <td><?php // echo $guest['guest_id'] ?></td> <?php */ ?>
               <!-- <td><img style="width: 80px;" src="<?php // echo 'http://'.$_SERVER['HTTP_HOST'].'/Lasting_flavors/'
                       // .$guest['image'];?>"
                         alt=""></td> -->
                <td><img style="width: 80px;" src="<?php echo $guest['img'];?>"
                         alt=""></td>
                         <td><?php echo $guest['gmail'] ?></td>
                         <td><?php if($guest['twitter']==null) echo ' ';    else echo $guest['twitter']; ?></td>
                         <td><?php if($guest['linkedin']==null) echo ' ';   else echo $guest['linkedin']; ?></td>
                         <td><?php if($guest['insta']==null) echo ' ';      else echo $guest['insta']; ?></td>
                         <td><?php if($guest['facebook']==null) echo ' ';   else echo $guest['facebook']; ?></td>
             <!--   <td>
                    <a role="button" class="btn btn-sm btn-primary text-white"
                       href="http://localhost/Lasting_flavors/admin/guest/edit/<?php // echo $guest['id']; ?>">edit</a>
                    <a role="button" class="btn btn-sm btn-danger text-white"
                       href="http://localhost/Lasting_flavors/admin/guest/delete/<?php // echo $guest['id']; ?>">delete</a>
                </td> -->
                <td>
                    <a role="button" class="btn btn-sm btn-primary text-white"
                       href="/admin/guest/edit/<?php echo $guest['id']; ?>">edit</a>
                    <a role="button" class="btn btn-sm btn-danger text-white"
                       href="/admin/guest/delete/<?php echo $guest['id']; ?>">delete</a>
                </td>
            </tr> <?php } ?>
<!--            <tr>-->
<!--                <td><a class="text-primary" href="http://localhost/Lasting_flavors/admin/guest/show/2">2</a></td>-->
<!--                <td>title</td>-->
<!--                <td>summary</td>-->
<!--                <td>view</td>-->
<!--                <td>user_id</td>-->
<!--                <td>cat_id</td>-->
<!--                <td><img style="width: 80px;" src="" alt=""></td>-->
<!--                <td>-->
<!--                    <a role="button" class="btn btn-sm btn-primary text-white" href="http://localhost/Lasting_flavors/admin/guest/edit/2">edit</a>-->
<!--                    <a role="button" class="btn btn-sm btn-danger text-white" href="http://localhost/Lasting_flavors/admin/guest/delete/2">delete</a>-->
<!--                </td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td><a class="text-primary" href="http://localhost/Lasting_flavors/admin/guest/show/3">3</a></td>-->
<!--                <td>title</td>-->
<!--                <td>summary</td>-->
<!--                <td>view</td>-->
<!--                <td>user_id</td>-->
<!--                <td>cat_id</td>-->
<!--                <td><img style="width: 80px;" src="" alt=""></td>-->
<!--                <td>-->
<!--                    <a role="button" class="btn btn-sm btn-primary text-white" href="http://localhost/Lasting_flavors/admin/guest/edit/3">edit</a>-->
<!--                    <a role="button" class="btn btn-sm btn-danger text-white" href="http://localhost/Lasting_flavors/admin/guest/delete/3">delete</a>-->
<!--                </td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td><a class="text-primary" href="http://localhost/Lasting_flavors/admin/guest/show/4">4</a></td>-->
<!--                <td>title</td>-->
<!--                <td>summary</td>-->
<!--                <td>view</td>-->
<!--                <td>user_id</td>-->
<!--                <td>cat_id</td>-->
<!--                <td><img style="width: 80px;" src="" alt=""></td>-->
<!--                <td>-->
<!--                    <a role="button" class="btn btn-sm btn-primary text-white" href="http://localhost/Lasting_flavors/admin/guest/edit/4">edit</a>-->
<!--                    <a role="button" class="btn btn-sm btn-danger text-white" href="http://localhost/Lasting_flavors/admin/guest/delete/4">delete</a>-->
<!--                </td>-->
<!--            </tr>-->
        </tbody>

    </table>
</div>

@endsection
