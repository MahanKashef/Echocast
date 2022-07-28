@extends('Together.admin.admin')

@section('content')

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h5 "><i class="fas fa-newspaper"></i> devrmations</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <!--  <a role="button" href="http://localhost/Lasting_flavors/admin/dev/create" class="btn btn-sm btn-success">create</a> -->
        <a role="button" href="/admin/dev/create" class="btn btn-sm btn-success">create</a>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <caption>List of devs</caption>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Image</th>
                <th>Description</th>
                <th>gmail</th>
                <th>twitter</th>
                <th>linkedin</th>
                <th>insta</th>
                <th>facebook</th>
                <th>setting</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($devs as $dev) { $dev = (array) $dev; ?>
            <tr>
                <!-- <td><a class="text-primary" href="http://localhost/Lasting_flavors/admin/dev/show/<?php // echo $dev['id'];
                ?>"><?php // echo $dev['id'] ?></a></td> -->
                <td><a class="text-primary" href="/admin/dev/show/<?php echo $dev['id'];
                    ?>"><?php echo $dev['id'] ?></a></td>
                <td><?php echo $dev['name'] ?></td>
                    <td><img style="width: 80px;" src="<?php echo $dev['img'];?>"
                          alt=""></td>
                <td><?php echo $dev['des'] ?></td>
                <td><?php echo $dev['gmail'] ?></td>
                <td><?php echo $dev['twitter'] ?></td>
                <td><?php echo $dev['linkedin'] ?></td>
                <td><?php echo $dev['insta'] ?></td>
                <td><?php echo $dev['facebook'] ?></td>
              
             <!--   <td>
                    <a role="button" class="btn btn-sm btn-primary text-white"
                       href="http://localhost/Lasting_flavors/admin/dev/edit/<?php // echo $dev['id']; ?>">edit</a>
                    <a role="button" class="btn btn-sm btn-danger text-white"
                       href="http://localhost/Lasting_flavors/admin/dev/delete/<?php // echo $dev['id']; ?>">delete</a>
                </td> -->
                <td>
                    <a role="button" class="btn btn-sm btn-primary text-white"
                       href="/admin/dev/edit/<?php echo $dev['id']; ?>">edit</a>
                    <a role="button" class="btn btn-sm btn-danger text-white"
                       href="/admin/dev/delete/<?php echo $dev['id']; ?>">delete</a>
                </td>
            </tr> <?php } ?>

        </tbody>

    </table>

</div>

@endsection
