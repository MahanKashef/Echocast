@extends('Together.layouts.main')


@section('content')
    
<?php use Illuminate\Support\Facades\DB; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archive page</title>

    <script src="https://kit.fontawesome.com/90d90f8831.js" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="/js/sccript.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet/less" type="text/css" href="/less/card.less" />
    <script src="//cdn.jsdelivr.net/npm/less" ></script>

    <link rel="stylesheet" href="/css/archives.css">

</head>
<body>
    

    
<!-- cards -->
<section id="cards" class="container access" >
    <h2 class="text card-text">
        گفت و گو ها
    </h2>
    <ul class="feature">
        <li feature-item><a href="#" class="feature-link">همه</a></li>
        <li feature-item><a href="#" class="feature-link">برنامه نویسی</a></li>
        <li feature-item><a href="#" class="feature-link">مکانیک</a></li>
        <li feature-item><a href="#" class="feature-link">الکترونیک</a></li>

    </ul>   
    <div class="row active-with-click">

        <?php 
                foreach($podcasts as $podcast) {
                    $podcast = (array) $podcast;
                    $guest = DB::table('guests')->where('name',$podcast['guest_id'])->get();
                    foreach($guest as $value);
                    $value = (array) $value; 
            ?>

<div class="col-md-4 col-sm-6 col-xs-12">
    <article class="material-card Red">
        <h2>
            <span class="name-text"><?php echo $podcast['title']; ?></span>
            <strong>
                <i class="fa fa-fw fa-star"></i>
                <?php echo $value['name'] ?>
            </strong>
        </h2>
        <div class="mc-content" style="direction: rtl">
            <div class="img-container">
                <img class="img-responsive" src="<?php echo $value['img'] ?>">
            </div>
            <div class="mc-description">
                <?php echo $value['story']; ?>
            </div>
        </div>
        <a class="mc-btn-action">
            <i class="fa fa-bars"></i>
        </a>
        <div class="mc-footer">
            <h4>
                Social
            </h4>
            <a href="#" class="fa fa-fw fa-facebook"></a>
            <a class="fa fa-fw fa-twitter"></a>
            <a class="fa fa-fw fa-linkedin"></a>
            <a class="fa fa-fw fa-google-plus"></a>
        </div>
    </article>
</div>

<?php } ?>

        <!--

        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Red">
                <h2>
                    <span class="name-text">Christopher Walken</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                        The Deer Hunter
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="img/photo5891164425698784601.jpg">
                    </div>
                    <div class="mc-description">
                        He has appeared in more than 100 films and television shows, including The Deer Hunter, Annie Hall, The Prophecy trilogy, The Dogs of War ...
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="mc-footer">
                    <h4>
                        Social
                    </h4>
                    <a href="#" class="fa fa-fw fa-facebook"></a>
                    <a class="fa fa-fw fa-twitter"></a>
                    <a class="fa fa-fw fa-linkedin"></a>
                    <a class="fa fa-fw fa-google-plus"></a>
                </div>
            </article>
        </div>
        
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
                        <img class="img-responsive" src="img/photo5891164425698784610.jpg">
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
                        <img class="img-responsive" src="img/photo5891164425698784632.jpg">
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
                        <img class="img-responsive" src="img/photo5891164425698784633.jpg">
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
                        <img class="img-responsive" src="img/resize2.jpg">
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
        </div> -->
   

</div>
</section>

<span class="line"></span>

<!-- Most view -->

    <section id="most-view">
        <div class="container">
            <div class="title">
                <h2 class="text title-text">پربازدیدترین ها</h2>
            </div>
            <div class="most-view-handle">

                <?php 
                        foreach($most_view as $items){ 
                        $items = (array) $items;
                        $guest = DB::table('guests')->where('name',$items['guest_id'])->get();
                        foreach($guest as $value);
                        $value = (array) $value; 
                ?>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2>
                            <span class="name-text"><?php echo $items['title']; ?></span>
                            <strong>
                                <i class="fa fa-fw fa-star"></i>
                                <?php echo $value['name']; ?>
                            </strong>
                        </h2>
                        <div class="mc-content" style="direction: rtl">
                            <div class="img-container">
                                <img class="img-responsive" src="<?php echo $value['img']; ?>">
                            </div>
                            <div class="mc-description">
                                <?php echo $value['story']; ?>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <div class="mc-footer">
                            <h4>
                                Social
                            </h4>
                            <a href="#" class="fa fa-fw fa-facebook"></a>
                            <a class="fa fa-fw fa-twitter"></a>
                            <a class="fa fa-fw fa-linkedin"></a>
                            <a class="fa fa-fw fa-google-plus"></a>
                        </div>
                    </article>
                </div>

                    <?php } ?>

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
                            <div class="img-container">
                                <img class="img-responsive" src="img/photo5891164425698784601.jpg">
                            </div>
                            <div class="mc-description">
                                He has appeared in more than 100 films and television shows, including The Deer Hunter, Annie Hall, The Prophecy trilogy, The Dogs of War ...
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <div class="mc-footer">
                            <h4>
                                Social
                            </h4>
                            <a href="#" class="fa fa-fw fa-facebook"></a>
                            <a class="fa fa-fw fa-twitter"></a>
                            <a class="fa fa-fw fa-linkedin"></a>
                            <a class="fa fa-fw fa-google-plus"></a>
                        </div>
                    </article>
                </div>
                
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
                                <img class="img-responsive" src="img/photo5891164425698784610.jpg">
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
                </div> --}}
            </div>
        </div>
    </section>

</body>
</html>

@endsection
