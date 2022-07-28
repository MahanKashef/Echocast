<?php  
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> --}}
    

    <link rel="stylesheet" href="/css/nav.css">
    <link rel="stylesheet" href="/css/media/nav.media.css">
    <title>EchoCast</title>
</head>
<body>
    <nav>
        <?php
                $info = DB::table('infos')->get()->all();
                foreach($info as $items){
            ?>
            {{-- <div class="logo"><a href="/"><img src="<?php echo $items->logo; ?>" alt=""></a></div> --}}
        {{-- <div class="logo"><a href="/"><img src="/img/brand.svg" alt=""></a></div> --}}
        <?php }?>
        <input type="checkbox" id="check">
        <label class="menu-bar" for="check">
            <i class="fas fa-bars"></i>
        </label>
        <label for=""></label>
        <div class="menu">
            <ul>
                <li><a href="/" class="text-animated">صفحه اصلی</a></li>
                <li><a href="/Archives" class="text-animated">پادکست ها</a></li>
                <li><a href="/About" class="text-animated">درباره ما</a></li>
                <li><a href="/Contact" class="text-animated">تماس با ما</a></li>
                <?php if(!Auth::check()) {?>
                <a href="/sign-in"><button  class="sign-in-button" type="submit">وارد شوید</button></a>
                <?php } else {?>
                <a href="/sign-out"><button class="sign-out-button" type="submit">خارج شوید</button></a>
              <?php } ?>
            </ul>
        </div>
        </nav>

        
        <script>
            window.addEventListener("scroll",function(){
                var nav = document.querySelector("nav");
                nav.classList.toggle("sticky",window.scrollY > 0);
            })
        </script>
</body>
</html>