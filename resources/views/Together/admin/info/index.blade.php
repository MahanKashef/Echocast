@extends('Together.admin.admin')

@section('content')

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h5 "><i class="fas fa-newspaper"></i> informations</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <!--  <a role="button" href="http://localhost/Lasting_flavors/admin/info/create" class="btn btn-sm btn-success">create</a> -->
        <a role="button" href="/admin/info/create" class="btn btn-sm btn-success">create</a>
        <a role="button" href="/admin/menus/create" class="btn btn-sm btn-warning">add menu</a>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <caption>List of infos</caption>
        <thead>
            <tr>
                <th>#</th>
                <th>Background Image</th>
                <th>Logo</th>
                <th>Aboutus</th>
                <th>Num1</th>
                <th>Num2</th>
                <th>Address</th>
                <th>gmail</th>
                <th>twitter</th>
                <th>linkedin</th>
                <th>insta</th>
                <th>facebook</th>
                <th>setting</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($infos as $info) { $info = (array) $info; ?>
            <tr>
                <!-- <td><a class="text-primary" href="http://localhost/Lasting_flavors/admin/info/show/<?php // echo $info['id'];
                ?>"><?php // echo $info['id'] ?></a></td> -->
                <td><a class="text-primary" href="/admin/info/show/<?php // echo $info['id'];
                    ?>"><?php // echo $info['id'] ?></a></td>
                    <td><img style="width: 80px;" src="<?php echo $info['bchome'];?>"
                          alt=""></td>
                          <td><img style="width: 80px;" src="<?php echo $info['logo'];?>"
                              alt=""></td>
                <td><?php echo $info['about'] ?></td>
                <td><?php echo $info['number1'] ?></td>
                <td><?php echo $info['number2'] ?></td>
                <td><?php echo $info['address'] ?></td>
                <td><?php echo $info['gmail'] ?></td>
                <td><?php echo $info['twitter'] ?></td>
                <td><?php echo $info['linkedin'] ?></td>
                <td><?php echo $info['insta'] ?></td>
                <td><?php echo $info['facebook'] ?></td>
              
             <!--   <td>
                    <a role="button" class="btn btn-sm btn-primary text-white"
                       href="http://localhost/Lasting_flavors/admin/info/edit/<?php // echo $info['id']; ?>">edit</a>
                    <a role="button" class="btn btn-sm btn-danger text-white"
                       href="http://localhost/Lasting_flavors/admin/info/delete/<?php // echo $info['id']; ?>">delete</a>
                </td> -->
                <td>
                    <a role="button" class="btn btn-sm btn-primary text-white"
                       href="/admin/info/edit/<?php echo $info['id']; ?>">edit</a>
                    <a role="button" class="btn btn-sm btn-danger text-white"
                       href="/admin/info/delete/<?php echo $info['id']; ?>">delete</a>
                </td>
            </tr> <?php } ?>

        </tbody>

    </table>


    <table class="table table-striped table-sm">
        <caption>List of Menus</caption>
        <thead>
            <tr>
                <th>#</th>
                <th>Menus</th>
                <th>setting</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($menus as $menu) { $menu = (array) $menu; ?>
            <tr>
                <td><?php echo $menu['id'] ?></td>
                <td><?php echo $menu['menu'] ?></td>   
                <td>
                    <a role="button" class="btn btn-sm btn-primary text-white"
                       href="/admin/menus/edit/<?php echo $menu['id']; ?>">edit</a>
                    <a role="button" class="btn btn-sm btn-danger text-white"
                       href="/admin/menus/delete/<?php echo $menu['id']; ?>">delete</a></td>        
            </tr> <?php } ?>

        </tbody>

    </table>


</div>

@endsection
