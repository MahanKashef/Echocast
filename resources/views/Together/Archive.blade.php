<?php 
    use Illuminate\Support\Facades\DB;
?>

@extends('Together.layouts.main')


@section('content')
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/90d90f8831.js" crossorigin="anonymous"></script>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/Archive.css">

    <!-- Media Queries -->

    <link rel="stylesheet" href="/css/media/archive.media.css">

</head>
<body>

    <main>
        <div class="container">
            <div class="head-tag">
                <?php foreach($podcast as $items) {
                        $items = (array) $items;
                        foreach ($guest as $value);
                        $value = (array) $value;
                    ?>
                    <h2 class="headtag-text"><?php echo $items['title']; ?></h2>
                    <hr>
                    <div class="pictures">
                        <img src="<?php echo $items['PFP']; ?>" alt="banner" class="headtag-img">
                        <img src="<?php echo $value['img']; ?>" alt="picture" class="person-img">
                    </div>
                </div>

                <div class="person">
                    <div class="person-info">
                        <ul class="person-items">
                            <li class="person-item">
                                <i class="fas fa-user-alt"></i>
                                <span>:</span>
                                <span><?php echo $value['name']; ?></span>
                            </li>
                            <li class="person-item">
                                <i class="fas fa-briefcase"></i>
                                <span>:</span>
                                <span><?php echo $value['res']; ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="between">
                    <span class="space"></span>
                </div>
                <div class="content">
                    <h3 class="content-head">: خلاصـــــــه</h3>
                    <p class="content-text"><?php echo $items['summary'] ?></p>
                </div>
                <div class="audio">
                    <audio controls>
                        <source src="<?php echo $items['AFP']; ?>" type="audio/ogg">
                        <source src="<?php echo $items['AFP']; ?>" type="audio/mpeg">
                        <source src="<?php echo $items['AFP']; ?>" type="audio/wav">
                        سیستم شما توانایی خواندن این فایل را ندارد
                    </audio>
                </div>

                <?php } ?>

                {{-- <h2 class="headtag-text">بازار زیبای ارزهای دیجیتال</h2>
                <hr>
                <div class="pictures">
                     <img src="/img/1328418482-parsnaz-ir.jpg" alt="banner" class="headtag-img"> 
                     <img src="/img/parsnaz.ir.jpg" alt="picture" class="person-img"> 
                </div>


             <div class="person">
                <div class="person-info">
                    <ul class="person-items">
                        <li class="person-item">
                            <i class="fas fa-user-alt"></i>
                            <span>:</span>
                            <span>ماهان کاشف</span>
                        </li>
                        <li class="person-item">
                            <i class="fas fa-briefcase"></i>
                            <span>:</span>
                            <span>مدیرعامل شرکت فناورگستر</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="between">
                <span class="space"></span>
            </div>
            <div class="content">
                <h3 class="content-head">: خلاصـــــــه</h3>
                <p class="content-text"> تخفیف های منطقی. در عین حال متهم یا غیر از این ، من به برخی از مشکلات ، غم و اندوه از کل موضوع ، اما با این حال ، هیچ کس؟ در برخی از لذت های کوچک یا به دلیل درد. این خطایی است که من می آیم ، کاوشگر مورد پذیرفته شده ، نه؟ دردسر سازنده اصلی یک باره زحمتی را می کشد که نتیجه آن بیشتر از لذت درد خواهد بود! شایسته ترین کار خوشحال اگر برخی از قدیمی ها اجتناب شود. گزینه ها تفاوت دارند ، اما به دنبال آن هستند. ما پیامدهای آن را متهم می کنیم و در عین حال ، چیز بزرگ مطرود را دریافت می کنیم؟ پرواز کوتاه تر؟ در این مرحله ، بدن موظف است با کانتیکل ها ستایش کند ، به آنها گفت که او کار کل را رد می کند؟ برای این ارائه ها انتخاب شده است ، از وظایفی که از همان موارد مشابه دنبال می شود ، باید از بعضی موارد خاص پیروی کند. به عنوان مثال ، به عنوان مثال ، تقبیح او در صورت دریافت ، مگر اینکه در آنجا متولد شود ، با این حال ، آنها ناراحتی عمومی را که او از آنها متنفر است ، ترک کردند و به دنبال این مرد رفتند! چون نه. انتخاب زمان ، درد ما آسان است ، که من توضیح می دهم ، کسی که من بیایم به همین دلیل است. برای حال حاضر انتخاب شده است ، ما ممکن است قادر به رد کردن بسیاری از هیچ فرصتی برای فرار نیست ، خود ، خود ، هیچ چیزی برای عیب جویی از زحمت ، و در همان نفرت از حقیقت ، بیش از همه ، همه درد ناشی از انتخاب آنه</p>
            </div>
            <div class="audio">
                <audio controls>
                    <source src="/audio/Demons.mp3" type="audio/ogg">
                    <source src="/audio/Demons.mp3" type="audio/mpeg">
                    <source src="/audio/Demons.mp3" type="audio/wav">
                    سیستم شما توانایی خواندن این فایل را ندارد
                </audio>
            </div>  --}}
                
        </div>
    </main>

       <!-- Suggestion -->

       <section id="suggest">
        <div class="container">
            <h2 class="suggest-head">نظرات و پیشنهادات</h2>
            <div class="users">
                
                <div class="user">
                    <h4 class="username">ماهان</h4>
                    <p class="user-suggest">این پست یکی از بهترینای تاریخ بود خیلی لذت بردم</p>
                </div>
                <?php foreach($comments as $comment) {
                    $comment = (array) $comment;
                    $user = DB::table('users')->where('id',$comment['user_id'])->get();
                    foreach($user as $items);
                    $items = (array) $items;
                ?>
                <div class="user">
                    <?php if($comment['status']=='approved'){?>
                    <h4 class="username"><?php echo $items['username'] ;?></h4>
                    <p class="user-suggest"><?php echo $comment['comment']; ?></p>
                </div>
                <?php } else if($comment['status'] == 'not_approved' && $items['id'] == Auth::id() ) {?>
                    <div class="user">
                        <h4 class="username"><?php echo $items['username'] ;?></h4>
                        <p class="user-suggest"><?php echo $comment['comment']; ?></p>
                        <p style="color: green; font-family: 'B KOODAK' ; font-size:18px; ">در انتظار تایید</p>
                    </div>
                    <?php } } ?>
            </div>

            <?php foreach($podcast as $value) {
                    $value = (array) $value;
                ?>
            <form action="/comment/store/<?php echo $value['id'] ?>" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- <div class="comment_box"> --}}
                 <!-- TEXT-BOX -->
                 <div class="comment_box"> <!-- آی دی پادکست و یوزر رو خودم باید تو تابع ذخیره تو کامنت کنترولر بسازم -->
                     <textarea name="comment" class="form-control" id="comment"  rows="10"></textarea>
                   </div>
                   <!-- TEXT-BOX END -->
 
                   <!-- SUBMIT BUTTON -->
                   <button type="submit" class="btn btn-primary" value="مشتاق خواندن نظرات و پیشنهادات شما هستیم" id="Send-Button">ثبت</button>
            </form>
            <?php }?>
        </div>
    </section>

       {{-- <section id="suggest">
        <div class="container">
            <h2 class="suggest-head">نظرات و پیشنهادات</h2>
            <div class="users">
                <div class="user">
                    <h4 class="username">ماهان</h4>
                    <p class="user-suggest">این پست یکی از بهترینای تاریخ بود خیلی لذت بردم</p>
                </div>

                <div class="user">
                    <h4 class="username">سعید</h4>
                    <p class="user-suggest">واقعا لذت بردم به شدت مشتاق برنامه های دیگتون هستم</p>
                </div>


                <div class="user">
                    <h4 class="username">جواد</h4>
                    <p class="user-suggest">مامان بیا منو بشور دیگه </p>
                </div>
            </div>
        </div>
    </section> --}}

</body>
</html>


@endsection