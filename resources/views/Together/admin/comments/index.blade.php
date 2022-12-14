@extends('Together.admin.admin')

@section('content')
    

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5 "><i class="fas fa-newspaper"></i> Comments</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a role="button" href="#" class="btn btn-sm btn-success disabled">create</a>
        </div>
    </div>
    <section class="table-responsive">
        <table class="table table-striped table-sm">
            <caption>List of comments</caption>
            <thead>
                <tr>
                    <th>#</th>
                    <th>user ID</th>
                    <th>podcast ID</th>
                    <th>comment</th>
                    <th>status</th>
                    <th>setting</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($comments as $comment) {
                    $comment = (array) $comment;
                ?>
                <tr>
                    <td><a href="/admin/comment/show/<?php echo $comment['id'];?>"><?php  echo $comment['id'];?></a></td>
                    <?php DB::table('comments')->where('id',$comment['id'])->update(['seen'=>1]); ?>
                    <td><?php  echo $comment['user_id'];?></td>
                    <td><?php  echo $comment['podcast_id'];?></td>
                    <td><?php  echo $comment['comment'];?></td>
                    <td><?php  echo $comment['status'];?></td>
                    <td>
                        <?php if($comment['status']=='approved'){?>
                        <a role="button" class="btn btn-sm btn-warning text-white" href="/admin/comment/status/<?php echo $comment['id'];?>">click to not approved</a>
                            <?php  }else {?>
                            <a role="button" class="btn btn-sm btn-success text-white" href="/admin/comment/status/<?php  echo $comment['id'];?>">click to approved</a>
                        <?php }?>
                    </td>
                    <td><a role="button" class="btn btn-sm btn-danger text-white" href="/admin/comment/delete/<?php echo $comment['id'];?>">delete</a></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </section>


@endsection
