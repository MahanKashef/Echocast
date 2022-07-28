@extends('Together.admin.admin')

@section('content')
    
<?php foreach($dev as $items) {
    $items = (array) $items;
 ?>
<section class="pt-3 pb-1 mb-2 border-bottom">
    <h1 class="h5">Show Information</h1>
</section>
<section class="row my-3">
    <section class="col-12">
        <h1 class="h4 border-bottom"><?php echo $items['name']; ?></h1>
        <img style="width: 100px;" src="<?php echo $items['img'];?>" alt="">
        <p class="text-secondary border-bottom"><?php echo $items['des']; ?></p>
        Socials <br>
        gmail     :     <span><?php echo $items['gmail']; ?></span><br>
        facebook  :     <span><?php echo $items['facebook']; ?></span><br>
        linkedin  :     <span><?php echo $items['linkedin']; ?></span><br>
        twitter   :     <span><?php echo $items['twitter']; ?></span><br>
        instagram :     <span><?php echo $items['insta']; ?></span><br>
    </section>
</section>

<?php }?>


@endsection
