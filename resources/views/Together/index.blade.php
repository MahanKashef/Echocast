@extends('Together.layouts.main')


@section('content')
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/90d90f8831.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="/js/sccript.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet/less" type="text/css" href="/less/card.less" />
    <script src="//cdn.jsdelivr.net/npm/less" ></script>


    <!-- Media Queries -->
    <link rel="stylesheet" href="/css/media/home.css">


    <title>podcast</title>
</head>
<body>
    


    <!--Preloader Start-->
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>
    <!--Preloader End-->


    <!-- Header -->
    <header>
        <div class="container headtag">
            <div class="row">
                <h2 class="text header-text">
                    echo podcast
                    <br>
                    <span class="ityped"></span>
                </h2>
            </div>
            <div class="action">
                <span class="action-icon">
                    <i class="fas fa-chevron-down"></i>
                </span>
            </div>
        </div>
    </header>


    <!-- Information
    <section id="info">
        <div class="container">
            <div class="row">
                <h2>We know what you need!</h2>
                <span class="underline"></span>
                <p>for other information please follow our instagram and for help us subscribe our youtube and write a comment</p>
            </div>
        </div>
    </section>     -->

    <!-- cards -->
            <section id="cards" class="container access" >
                <h2 class="text card-text">
                    پربازدیدترین ها
                </h2>
                <div class="row active-with-click">
                   <?php foreach($most_view as $items) {
                            $items = (array) $items;
                            $guest = DB::table('guests')->where('name',$items['guest_id'])->get();
                            $value = Null;
                            if($guest != Null)
                            {
                                foreach($guest as $value);
                                $value = (array) $value;
                            }
                    ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Red">
                            <h2 style="direction:ltr">
                                <span class="name-text"><?php echo $items['title']; ?></span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    <?php echo $items['guest_id']; ?>
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <a href="/Archive/<?php echo $items['title'];?>" class="img-link">
                                    {{-- <?php // if($value != Null) echo $value['img'];?> --}}
                                    {{-- {{asset('storage/guest-files/img/clock.png')}} --}}
                                    <div class="img-container">
                                        <img class="img-responsive" src="<?php if($value != Null) echo $value['img'];?>">
                                    </div>
                                </a>
                                <div class="mc-description">
                                    <?php if($value != Null) echo $value['story']; ?>
                                </div>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                                
                                <a href="#" class="fa fa-fw fa-facebook"></a>
                                <a href="#" class="fa fa-fw fa-twitter"></a>
                                <a href="#" class="fa fa-fw fa-linkedin"></a>
                                <a href="#" class="fa fa-fw fa-google-plus"></a>
                            </div>
                        </article>
                    </div>
                     {{-- <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Red">
                            <h2>
                                <span class="name-text">Christopher Walken</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    The Deer Hunter
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <a href="#" class="img-link">
                                    <div class="img-container">
                                        <img class="img-responsive" src="/img/resize2.jpg">
                                    </div>
                                </a>
                                <div class="mc-description">
                                    He has appeared in more than 100 films and television shows, including The Deer Hunter, Annie Hall, The Prophecy trilogy, The Dogs of War ...
                                </div>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                                
                                <a href="#" class="fa fa-fw fa-facebook"></a>
                                <a href="#" class="fa fa-fw fa-twitter"></a>
                                <a href="#" class="fa fa-fw fa-linkedin"></a>
                                <a href="#" class="fa fa-fw fa-google-plus"></a>
                            </div>
                        </article>
                    </div> --}}
                    <?php } ?>
                    <!--
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Pink">
                            <h2>
                                <span>Sean Penn</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    Mystic River
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-sean-penn.jpg">
                                </div>
                                <div class="mc-description">
                                    He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008). Penn began his acting career in television with a brief appearance in a 1974 episode of Little House on the Prairie ...
                                </div>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                                <h4>
                                    Social
                                </h4>
                                <a class="fa fa-fw fa-facebook"></a>
                                <a class="fa fa-fw fa-twitter"></a>
                                <a class="fa fa-fw fa-linkedin"></a>
                                <a class="fa fa-fw fa-google-plus"></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Purple">
                            <h2>
                                <span>Clint Eastwood</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    Million Dollar Baby
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-clint-eastwood.jpg">
                                </div>
                                <div class="mc-description">
                                    He rose to international fame with his role as the Man with No Name in Sergio Leone's Dollars trilogy of spaghetti Westerns during the 1960s ...
                                </div>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                                <h4>
                                    Social
                                </h4>
                                <a class="fa fa-fw fa-facebook"></a>
                                <a class="fa fa-fw fa-twitter"></a>
                                <a class="fa fa-fw fa-linkedin"></a>
                                <a class="fa fa-fw fa-google-plus"></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Deep-Purple">
                            <h2>
                                <span>Dustin Hoffman</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    Kramer vs. Kramer
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-dustin-hoffman.jpg">
                                </div>
                                <div class="mc-description">
                                    He has been known for his versatile portrayals of antiheroes and vulnerable characters.[3] He won the Academy Award for Kramer vs. Kramer in 1979 ...
                                </div>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                                <h4>
                                    Social
                                </h4>
                                <a class="fa fa-fw fa-facebook"></a>
                                <a class="fa fa-fw fa-twitter"></a>
                                <a class="fa fa-fw fa-linkedin"></a>
                                <a class="fa fa-fw fa-google-plus"></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Indigo">
                            <h2>
                                <span>Edward Norton</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    American History X
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-edward-norton.jpg">
                                </div>
                                <div class="mc-description">
                                    He has been nominated for three Academy Awards for his work in the films Primal Fear, American History X and Birdman. He also starred in other roles ...
                                </div>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                                <h4>
                                    Social
                                </h4>
                                <a class="fa fa-fw fa-facebook"></a>
                                <a class="fa fa-fw fa-twitter"></a>
                                <a class="fa fa-fw fa-linkedin"></a>
                                <a class="fa fa-fw fa-google-plus"></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Blue">
                            <h2>
                                <span>Michael Caine</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    Educated Rita
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-michael-caine.jpg">
                                </div>
                                <div class="mc-description">
                                    English actor and author. Renowned for his distinctive working class cockney accent, Caine has appeared in over 115 films and is regarded as a British ...
                                </div>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                                <h4>
                                    Social
                                </h4>
                                <a class="fa fa-fw fa-facebook"></a>
                                <a class="fa fa-fw fa-twitter"></a>
                                <a class="fa fa-fw fa-linkedin"></a>
                                <a class="fa fa-fw fa-google-plus"></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Light-Blue">
                            <h2>
                                <span>Harvey Keitel</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    Pulp Fiction
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-harvey-keitel.jpg">
                                </div>
                                <div class="mc-description">
                                    Some of his most notable starring roles were in Martin Scorsese's Mean Streets and Taxi Driver, Ridley Scott's The Duellists and Thelma & Louise, Quentin Tarantino ...
                                </div>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                                <h4>
                                    Social
                                </h4>
                                <a class="fa fa-fw fa-facebook"></a>
                                <a class="fa fa-fw fa-twitter"></a>
                                <a class="fa fa-fw fa-linkedin"></a>
                                <a class="fa fa-fw fa-google-plus"></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Cyan">
                            <h2>
                                <span>Jack Nicholson</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    The Shining
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-jack-nicholson.jpg">
                                </div>
                                <div class="mc-description">
                                    Throughout his career, Nicholson has portrayed unique and challenging roles, many of which include dark portrayals of excitable, neurotic and psychopathic characters ...
                                </div>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                                <h4>
                                    Social
                                </h4>
                                <a class="fa fa-fw fa-facebook"></a>
                                <a class="fa fa-fw fa-twitter"></a>
                                <a class="fa fa-fw fa-linkedin"></a>
                                <a class="fa fa-fw fa-google-plus"></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Teal">
                            <h2>
                                <span>Jeff Bridges</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    The Big Lebowski
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-jeff-bridges.jpg">
                                </div>
                                <div class="mc-description">
                                    He comes from a well-known acting family and began his televised acting in 1958 as a child with his father, Lloyd Bridges, and brother, Beau, on television's Sea Hunt ...
                                </div>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                                <h4>
                                    Social
                                </h4>
                                <a class="fa fa-fw fa-facebook"></a>
                                <a class="fa fa-fw fa-twitter"></a>
                                <a class="fa fa-fw fa-linkedin"></a>
                                <a class="fa fa-fw fa-google-plus"></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Green">
                            <h2>
                                <span>Joaquin Phoenix</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    Her
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-joaquin-phoenix.jpg">
                                </div>
                                <div class="mc-description">
                                    is an American actor, producer, music video director, musician and activist. For his work as an artist, Phoenix has received a Grammy Award, a Golden Globe Award and three Academy ...
                                </div>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                                <h4>
                                    Social
                                </h4>
                                <a class="fa fa-fw fa-facebook"></a>
                                <a class="fa fa-fw fa-twitter"></a>
                                <a class="fa fa-fw fa-linkedin"></a>
                                <a class="fa fa-fw fa-google-plus"></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Light-Green">
                            <h2>
                                <span>Tom Hanks</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    Forrest Gump
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-tom-hanks.jpg">
                                </div>
                                <div class="mc-description">
                                    He is known for his roles in Big (1988), Philadelphia (1993), Forrest Gump (1994), Apollo 13 (1995), Saving Private Ryan, You've Got Mail (both 1998), The Green Mile (1999), Cast Away (2000) ...
                                </div>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                                <h4>
                                    Social
                                </h4>
                                <a class="fa fa-fw fa-facebook"></a>
                                <a class="fa fa-fw fa-twitter"></a>
                                <a class="fa fa-fw fa-linkedin"></a>
                                <a class="fa fa-fw fa-google-plus"></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Lime">
                            <h2>
                                <span>Philip Seymour Hoffman</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    25th Hour
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-philip-seymour-hoffman.jpg">
                                </div>
                                <div class="mc-description">
                                    Best known for his distinctive supporting and character roles – typically lowlifes, bullies, and misfits – Hoffman was a regular presence in films from the early 1990s until his death at age 46.
                                </div>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                                <h4>
                                    Social
                                </h4>
                                <a class="fa fa-fw fa-facebook"></a>
                                <a class="fa fa-fw fa-twitter"></a>
                                <a class="fa fa-fw fa-linkedin"></a>
                                <a class="fa fa-fw fa-google-plus"></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Yellow">
                            <h2>
                                <span>Paul Newman</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    The Color of Money
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-paul-newman.jpg">
                                </div>
                                <div class="mc-description">
                                    He won numerous awards, including an Academy Award for his performance in the 1986 film The Color of Money,[3] a BAFTA Award, a Screen Actors Guild Award, a Cannes Film Festival Award, an Emmy Award ...
                                </div>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                                <h4>
                                    Social
                                </h4>
                                <a class="fa fa-fw fa-facebook"></a>
                                <a class="fa fa-fw fa-twitter"></a>
                                <a class="fa fa-fw fa-linkedin"></a>
                                <a class="fa fa-fw fa-google-plus"></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Amber">
                            <h2>
                                <span>Marlon Brando</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    The Godfather
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-marlon-brando.jpg">
                                </div>
                                <div class="mc-description">
                                    He is hailed for bringing a gripping realism to film acting, and is frequently cited as the greatest and most influential actor of all time.[2] A cultural icon, Brando is most famous for his Academy ...
                                </div>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                                <h4>
                                    Social
                                </h4>
                                <a class="fa fa-fw fa-facebook"></a>
                                <a class="fa fa-fw fa-twitter"></a>
                                <a class="fa fa-fw fa-linkedin"></a>
                                <a class="fa fa-fw fa-google-plus"></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Orange">
                            <h2>
                                <span>Kevin Spacey</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    American Beauty
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-kevin-spacey.jpg">
                                </div>
                                <div class="mc-description">
                                    He began his career as a stage actor during the 1980s, before being cast in supporting roles in film and television. He gained critical acclaim in the early 1990s, culminating in his first Academy Award ...
                                </div>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                                <h4>
                                    Social
                                </h4>
                                <a class="fa fa-fw fa-facebook"></a>
                                <a class="fa fa-fw fa-twitter"></a>
                                <a class="fa fa-fw fa-linkedin"></a>
                                <a class="fa fa-fw fa-google-plus"></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Deep-Orange">
                            <h2>
                                <span>Robert De Niro</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    Taxy Driver
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-robert-de-niro.jpg">
                                </div>
                                <div class="mc-description">
                                    His first major film roles were in the sports drama Bang the Drum Slowly (1973) and Martin Scorsese's crime film Mean Streets (1973). In 1974, after being turned down for the role of Sonny Corleone in the crime ...
                                </div>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                                <h4>
                                    Social
                                </h4>
                                <a class="fa fa-fw fa-facebook"></a>
                                <a class="fa fa-fw fa-twitter"></a>
                                <a class="fa fa-fw fa-linkedin"></a>
                                <a class="fa fa-fw fa-google-plus"></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Brown">
                            <h2>
                                <span>Steve Mcqueen</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    Papillon
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-steve-mcqueen.jpg">
                                </div>
                                <div class="mc-description">
                                    Called "The King of Cool", his "anti-hero" persona, developed at the height of the Vietnam War-era counterculture, made him a top box-office draw of the 1960s and 1970s. McQueen received an Academy Award nomination for his ...
                                </div>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                                <h4>
                                    Social
                                </h4>
                                <a class="fa fa-fw fa-facebook"></a>
                                <a class="fa fa-fw fa-twitter"></a>
                                <a class="fa fa-fw fa-linkedin"></a>
                                <a class="fa fa-fw fa-google-plus"></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Grey">
                            <h2>
                                <span>Rugter Hauer</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    Blade Runner
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-rugter-hauer.jpg">
                                </div>
                                <div class="mc-description">
                                    Blonde, blue-eyed, tall and handsome Dutch actor Rutger Hauer has an international reputation for playing everything from romantic leads to action heroes to sinister villains. Hauer was born in Breukelen, a town in the province ...
                                </div>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                                <h4>
                                    Social
                                </h4>
                                <a class="fa fa-fw fa-facebook"></a>
                                <a class="fa fa-fw fa-twitter"></a>
                                <a class="fa fa-fw fa-linkedin"></a>
                                <a class="fa fa-fw fa-google-plus"></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Blue-Grey">
                                <h2>
                                <span>Morgan Freeman</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    Glory
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-morgan-freeman.jpg">
                                </div>
                                <div class="mc-description">
                                    Freeman has received Academy Award nominations for his performances in Street Smart, Driving Miss Daisy, The Shawshank Redemption and Invictus ...
                                </div>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                                <h4>
                                    Social
                                </h4>
                                <a class="fa fa-fw fa-facebook"></a>
                                <a class="fa fa-fw fa-twitter"></a>
                                <a class="fa fa-fw fa-linkedin"></a>
                                <a class="fa fa-fw fa-google-plus"></a>
                            </div>
                        </article>
                    </div>
                -->
            
        </div>
    </section>

        <!-- Contact us
        <section id="contact">
            <div class="container">
                <div class="row">
                    <h2>
                        if you want to help can contact us with furj ldurh nv,aj rgudi laodi jadhfj
                    </h2>
                    <span class="underline"></span>
                    <ul>
                        <li><i class="fas fa-envelope"></i>
                            <p>gmail.comgmail.com</p></li>
                            <li><i class="fas fa-phone"></i>
                            <p>09122223652</p></li>
                    </ul>

                </div>
            </div>
        </section> -->


        <!-- <Footer>
                <div class="row">
                    <div class="echo-info">
                        <h3>This is Echo cast</h3>
                        <p>vahgti salam mikoni khoob kari mikoni v vaghti salam nemikoni dari eshtebah mikoni pas salam kon ta kare dorost ro bokoni</p>
                        <div class="info-social">
                            <div class="player-social">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-linkedin"></i>
                                <i class="fab fa-twitter"></i>
                            </div>
                        </div>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Archive</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    
            </div>
        -->
        

        <!-- Ityped js -->
        <script src="js/ityped.js"></script>
 
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

         <!-- Preloader -->
         <script src="js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
         <script src="js/jquery.magnific-popup.min.js"></script>
         <script src="js/main.js"></script>

        <script>
            window.ityped.init(document.querySelector('.ityped'),{
                strings : ['your sound','is our sound']
            })
        </script>

</body>
</html>


@endsection