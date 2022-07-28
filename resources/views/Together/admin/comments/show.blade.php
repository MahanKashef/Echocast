@extends('Together.admin.admin')

@section('content')

    <section class="pt-3 pb-1 mb-2 border-bottom">
        <h1 class="h5">Show Comment</h1>
    </section>
<section class="row my-3">
    <section class="col-12">
        <?php foreach($comment as $items) {
            $items = (array) $items; 
            $user = DB::table('users')->where('id',$items['user_id'])->get();
            foreach($user as $value) {
                $value = (array) $value;
                $podcast = DB::table('podcasts')->where('id',$items['podcast_id'])->get();
                foreach($podcast as $item) {
                    $item = (array) $item;
         ?>
        <h1 class="h4 border-bottom">ID : <?php echo $items['id'];?></h1>
        <p class="text-secondary border-bottom">Username : <?php echo $value['username'];?></p>
        <p class="text-secondary border-bottom">Podcast title : <?php echo $item['title'];?></p>
        <p class="text-secondary border-bottom"><?php echo $items['comment'];?></p>
        <p class="text-secondary border-bottom"><?php echo $items['status'];?></p>
        <p class="text-secondary border-bottom"><?php echo $items['created_at'];?></p>
        <?php if($items['status']=='approved'){?>
            <a role="button" class="btn btn-sm btn-warning text-white" href="/admin/comment/approved/<?php echo $items['id'];?>">click to not approved</a>
        <?php }else {?>
            <a role="button" class="btn btn-sm btn-success text-white" href="/admin/comment/approved/<?php  echo $items['id'];?>">click to approved</a>
        <?php } } } }?>
    </section>
</section>

@endsection