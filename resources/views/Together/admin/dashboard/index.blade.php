@extends('Together.admin.admin')


@section('content')
    
    <div class="row mt-3">

        <div class="col-sm-6 col-lg-3">
            <a href="/admin/guest" class="text-decoration-none">
                <div class="card text-white bg-gradiant-green-blue mb-3">
                    <div class="card-header d-flex justify-content-between align-items-center"><span><i class="fas fa-mug-hot"></i> Guests</span> <span class="badge badge-pill right"><?php echo $guestCount; ?></span></div>
                    <div class="card-body">
                        <section class="font-12 my-0"><i class="fas fa-clipboard-list"></i> GO TO Guest Page!</section>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="/admin/user" class="text-decoration-none">
                <div class="card text-white bg-juicy-orange mb-3">
                    <div class="card-header d-flex justify-content-between align-items-center"><span><i class="fas fa-users"></i> Users</span>  <span class="badge badge-pill right"><?php echo $usersCount; ?></span></div>
                    <div class="card-body">
                        <section class="d-flex justify-content-between align-items-center font-12">
                            <span class=""><i class="fas fa-users-cog"></i> Admin <span class="badge badge-pill mx-1"><?php echo $adminCount; ?></span></span>
                            <span class=""><i class="fas fa-user"></i> All Users <span class="badge badge-pill mx-1"><?php echo $usersCount - $adminCount;?></span></span>
                        </section>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="/admin/podcast" class="text-decoration-none">
                <div class="card text-white bg-dracula mb-3">
                    <div class="card-header d-flex justify-content-between align-items-center"><span><i class="fas fa-newspaper"></i> Podcasts</span>  <span class="badge badge-pill right"><?php echo $podcastsCount; ?></span></div>
                    <div class="card-body">
                        <section class="d-flex justify-content-between align-items-center font-12">
                            <span class=""><i class="fas fa-bolt"></i> Views <span class="badge badge-pill mx-1"><?php echo $podcastsView; ?></span></span>
                        </section>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="/admin/comment" class="text-decoration-none">
                <div class="card text-white bg-neon-life mb-3">
                    <div class="card-header d-flex justify-content-between align-items-center"><span><i class="fas fa-comments"></i> Comment</span>  <span class="badge badge-pill right"><?php echo $commentsCount; ?></span></div>
                    <div class="card-body">
<!--                        <h5 class="card-title">Info card title</h5>-->
                        <section class="d-flex justify-content-between align-items-center font-12">
                            <span class=""><i class="far fa-eye-slash"></i> Unseen <span class="badge badge-pill mx-1"><?php echo $unseenCount; ?></span></span>
                            <span class=""><i class="far fa-check-circle"></i> Approved <span class="badge badge-pill mx-1"><?php echo $approvedCount; ?></span></span>
                        </section>
                    </div>
                </div>
            </a>
        </div>

    </div>


    <div class="row mt-2">
        <div class="col-4">
            <h2 class="h6 pb-0 mb-0">
                Most viewed podcasts
            </h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>title</th>
                        <th>view</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($most_viewed as $podcast) {
                        $podcast = (array) $podcast; ?>
                    <tr>
                        <td><a class="text-primary" href="/admin/podcast/show/<?php echo $podcast['title'] ?>"><?php echo $podcast['id'] ?></a></td>
                        <td><?php echo  $podcast['title']; ?></td>
                        <td><span class="badge badge-secondary"><?php echo $podcast['view']; ?></span></td>
                    </tr>
                    <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-4">
            <h2 class="h6 pb-0 mb-0">
                Most commented podcasts
               
            </h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>title</th>
                            <th>comment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($most_commented as $podcast) {
                                $podcast = (array) $podcast;
                            ?>
                        <tr>
                            <td><a class="text-primary" href="/admin/podcast/show/<?php  echo  $podcast['title'] ?>"><?php echo  $podcast['id'] ?></a></td>
                            <td><?php echo  $podcast['title'] ?></td>
                            <td><span class="badge badge-success"><?php echo  $podcast['commentCount'] ?></span></td>
                        </tr>
                        <?php }?>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-4">
            <h2 class="h6 pb-0 mb-0">
                Comments
            </h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>username</th>
                        <th>comment</th>
                        <th>status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($lastComments as $comment) {
                            $comment = (array) $comment;
                            $user = DB::table('users')->where('id',$comment['user_id'])->get();
                            foreach($user as $item) {
                                $item = (array) $item;
                         ?>
                        <tr>
                            <td><a class="text-primary" href="/admin/comment/show/<?php echo $comment['id'] ?>"><?php echo  $comment['id'] ?></a></td>
                            <td><?php echo  $item['username'] ?></td>
                            <td><?php echo  $comment['comment'] ?></td>
                            <td><span class="badge badge-warning"><?php echo $comment['status'] ?></span></td>
                        </tr>
                    <?php  } }?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection
