@extends('Together.admin.admin')

@section('content')
    
<?php foreach($guest as $items) {
    $items = (array) $items;
 ?>
<section class="pt-3 pb-1 mb-2 border-bottom">
    <h1 class="h5">Show Guests</h1>
</section>
<section class="row my-3">
    <section class="col-12">
        <h1 class="h4 border-bottom"><?php echo $items['name']; ?></h1>
        <img style="width: 100px;" src="<?php echo $items['img'];?>" alt="">
        <p class="text-secondary border-bottom"><?php echo $items['res']; ?></p>
        <section class=""><?php echo $items['story']; ?></section>
    </section>
</section>

<?php }?>


@endsection
