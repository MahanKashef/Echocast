@extends('Together.layouts.main')


@section('content')
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Bootstrap end -->

    <!-- FontAwsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- FontAwsome end -->

    <!-- main CSS -->
    <link rel="stylesheet" href="/css/About-us.css">
    <!-- main CSS end -->

    <title>About US</title>

</head>
<body>
    <!-- main -->
    <div id="main">
        <!-- nav-bar -->
        {{-- <header>
            <nav>
                <div class="logo">LOGO</div>
                <div class="menu">
                    <ul>
                        <li><a href="#" class="text-animated" id="About-border">About Us</a></li>
                        <li><a href="#" class="text-animated">Home</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- nav-bar end --> --}}

        <!-- Card -->
        <?php foreach($devs as $dev) {
                $dev = (array) $dev;
            ?>
        <div class="the-card">
            <div class="first">
                <div class="container">
                    <div class="wrapper">
                        <!-- profile image -->
                        <a href=""><img src="<?php echo $dev['img']; ?>" alt=""></a>
                        <div class="title"><?php echo $dev['name']; ?></div>
                        <div class="place">Surkhet, Nepal</div>
                    </div>
                    <div class="content">
                        <p><?php echo $dev['des']; ?></p>
                    </div>
                    <div class="icons">
                        <li><a href=""><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href=""><span class="fab fa-twitter"></span></a></li>
                        <li><a href=""><span class="fab fa-instagram"></span></a></li>
                    </div>
                </div>
                <script>
                    const img = document.querySelector("img");
                    const icons = document.querySelector(".icons")
                    img.onclick = function(){
                        this.classList.toggle("active");
                        icons.classList.toggle("active")
                    }
                </script>
            </div>
            <div class="sec">
                <div class="container">
                    <div class="wrapper">
                        <!-- profile image -->
                        <a href=""><img src="/img/prof.png" alt=""></a>  <!-- Picture -->
                        <div class="title">Andrew Neil</div>             <!-- Name -->
                        <div class="place">Surkhet, Nepal</div>           
                    </div>
                    <div class="content">
                        <p>User Interface Designer and<br>front-end developer</p>
                    </div>
                    <div class="icons">
                        <li><a href=""><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href=""><span class="fab fa-twitter"></span></a></li>
                        <li><a href=""><span class="fab fa-instagram"></span></a></li>
                    </div>
                </div>
                <script>
                    const img = document.querySelector("img");
                    const icons = document.querySelector(".icons")
                    img.onclick = function(){
                        this.classList.toggle("active");
                        icons.classList.toggle("active")
                    }
                </script>
            </div>

            <?php } ?>

            {{-- <div class="third">
                <div class="container">
                    <div class="wrapper">
                        <!-- profile image -->
                        <a href=""><img src="/img/prof.png" alt=""></a>
                        <div class="title">Andrew Neil</div>
                        <div class="place">Surkhet, Nepal</div>
                    </div>
                    <div class="content">
                        <p>User Interface Designer and<br>front-end developer</p>
                    </div>
                    <div class="icons">
                        <li><a href=""><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href=""><span class="fab fa-twitter"></span></a></li>
                        <li><a href=""><span class="fab fa-instagram"></span></a></li>
                    </div>
                </div>
                <script>
                    const img = document.querySelector("img");
                    const icons = document.querySelector(".icons")
                    img.onclick = function(){
                        this.classList.toggle("active");
                        icons.classList.toggle("active")
                    }
                </script>
            </div>
        </div> --}}
        <!-- Card end -->

        <?php foreach($info as $item) {
            $item = (array) $item;
         ?>

        <!-- About-Us  -->

        <div class="container-2">
            <div class="T-box">
              <p class="h1">About us</p>
              <hr>
               <p class="text-justify"><?php echo $item['about'] ?></p>
            </div>
        </div>

        {{-- <div class="container-2">
            <div class="T-box">
              <p class="h1">About us</p>
              <hr>
               <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti vitae ad et distinctio, eum voluptatem voluptatum unde nihil recusandae dolorem animi laboriosam assumenda consequatur fugiat cum, tempora praesentium, velit officia.</p>
            </div>
        </div> --}}

        <?php } ?>

        <!-- About-Us end -->
    </div>

    <!-- Bootstrap Script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Bootstrap Script end -->


</body>
</html>

@endsection
