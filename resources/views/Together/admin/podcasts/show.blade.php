@extends('Together.admin.admin')

@section('content')

<section class="pt-3 pb-1 mb-2 border-bottom" >
    <h1 class="h5" >Show Podcast</h1>
</section>
<section class="row my-3" >
    <section class="col-12">
        
            <?php foreach ($podcast as $items) { ?>
            <?php $items = (array) $items;
            ?>
        
            <h1  class="h4 border-bottom rtl"><?php  echo $items['title']; ?></h1>
            <p class="text-secondary border-bottom rtl"><?php  echo $items['summary']; ?></p>
            <img style="width: 100px;" src=<?php echo $items['PFP']; ?> alt="store">
            <hr>
            <br>
            <audio controls>
                <source src=<?php echo $items['AFP']; ?> type="audio/ogg" >
                <source src=<?php echo $items['AFP']; ?> type="audio/mpeg">
                <source src=<?php echo $items['AFP']; ?> type="audio/mp3" >
            </audio>
            <section class=""><?php // echo $podcast['body']; ?></section>

            <?php } ?>
    </section>
</section>

@endsection
