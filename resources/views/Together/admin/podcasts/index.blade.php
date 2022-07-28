@extends('Together.admin.admin')

@section('content')

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h5 "><i class="fas fa-newspaper"></i> Podcasts</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <!--  <a role="button" href="http://localhost/Lasting_flavors/admin/podcast/create" class="btn btn-sm btn-success">create</a> -->
        <a role="button" href="/admin/podcast/create" class="btn btn-sm btn-success">create</a>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <caption>List of podcasts</caption>
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Summary</th>
                <th>View</th>
                <th>Guest ID</th>
                <th>Menu ID</th>
                <th>Image</th>
                <th>Audio</th>
                <th>Setting</th>
            </tr>
        </thead>
        <tbody>
        <?php  foreach($podcasts as $podcast) { ?>
            <tr>
                <?php //dd($podcast) ?>
                <!-- <td><a class="text-primary" href="http://localhost/Lasting_flavors/admin/podcast/show/<?php // echo $podcast['id'];
                ?>"><?php // echo $podcast['id'] ?></a></td> -->
                <td><a class="text-primary" href="/admin/podcast/show/".<?php echo $podcast->id ?> ><?php  echo $podcast->id ?></a></td>
                <td><?php  echo $podcast->title; ?></td>
                <td><?php  echo $podcast->summary; ?></td>
                <td><?php  //echo $podcast->view ?></td>
                <td><?php  echo $podcast->guest_id ?></td> 
                <td><?php  echo $podcast->menu_id ?></td>
               <!-- <td><img style="width: 80px;" src="<?php // echo 'http://'.$_SERVER['HTTP_HOST'].'/Lasting_flavors/'
                       // .$podcast['image'];?>"
                         alt=""></td> -->
                        <td><img style="width: 80px;" src=<?php echo $podcast->PFP; ?> alt=""></td>
                        <td>
                            <audio controls>
                                <source src=<?php echo $podcast->AFP; ?> type="audio/ogg">
                                <source src=<?php echo $podcast->AFP; ?> type="audio/mpeg">
                                <source src=<?php echo $podcast->AFP; ?> type="audio/mp3">
                            </audio>
                        </td>
             <!--   <td>
                    <a role="button" class="btn btn-sm btn-primary text-white"
                       href="http://localhost/Lasting_flavors/admin/podcast/edit/<?php // echo $podcast['id']; ?>">edit</a>
                    <a role="button" class="btn btn-sm btn-danger text-white"
                       href="http://localhost/Lasting_flavors/admin/podcast/delete/<?php // echo $podcast['id']; ?>">delete</a>
                </td> -->
                <td>
                    <a role="button" class="btn btn-sm btn-primary text-white"
                       href="/admin/podcast/edit/<?php  echo $podcast->id; ?>">edit</a>
                    <a role="button" class="btn btn-sm btn-danger text-white"
                       href="/admin/podcast/delete/<?php echo $podcast->id; ?>">delete</a>
                </td>
            </tr> 
            <?php } ?>
<!--            <tr>-->
<!--                <td><a class="text-primary" href="http://localhost/Lasting_flavors/admin/podcast/show/2">2</a></td>-->
<!--                <td>title</td>-->
<!--                <td>summary</td>-->
<!--                <td>view</td>-->
<!--                <td>user_id</td>-->
<!--                <td>cat_id</td>-->
<!--                <td><img style="width: 80px;" src="" alt=""></td>-->
<!--                <td>-->
<!--                    <a role="button" class="btn btn-sm btn-primary text-white" href="http://localhost/Lasting_flavors/admin/podcast/edit/2">edit</a>-->
<!--                    <a role="button" class="btn btn-sm btn-danger text-white" href="http://localhost/Lasting_flavors/admin/podcast/delete/2">delete</a>-->
<!--                </td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td><a class="text-primary" href="http://localhost/Lasting_flavors/admin/podcast/show/3">3</a></td>-->
<!--                <td>title</td>-->
<!--                <td>summary</td>-->
<!--                <td>view</td>-->
<!--                <td>user_id</td>-->
<!--                <td>cat_id</td>-->
<!--                <td><img style="width: 80px;" src="" alt=""></td>-->
<!--                <td>-->
<!--                    <a role="button" class="btn btn-sm btn-primary text-white" href="http://localhost/Lasting_flavors/admin/podcast/edit/3">edit</a>-->
<!--                    <a role="button" class="btn btn-sm btn-danger text-white" href="http://localhost/Lasting_flavors/admin/podcast/delete/3">delete</a>-->
<!--                </td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td><a class="text-primary" href="http://localhost/Lasting_flavors/admin/podcast/show/4">4</a></td>-->
<!--                <td>title</td>-->
<!--                <td>summary</td>-->
<!--                <td>view</td>-->
<!--                <td>user_id</td>-->
<!--                <td>cat_id</td>-->
<!--                <td><img style="width: 80px;" src="" alt=""></td>-->
<!--                <td>-->
<!--                    <a role="button" class="btn btn-sm btn-primary text-white" href="http://localhost/Lasting_flavors/admin/podcast/edit/4">edit</a>-->
<!--                    <a role="button" class="btn btn-sm btn-danger text-white" href="http://localhost/Lasting_flavors/admin/podcast/delete/4">delete</a>-->
<!--                </td>-->
<!--            </tr>-->
        </tbody>

    </table>
</div>

@endsection
