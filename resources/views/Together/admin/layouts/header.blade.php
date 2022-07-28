<!doctype html>
<html lang="en">
<head>
    <?php
    
    // if(!isset($db))
    // {
    //     $db = new \DataBase\DataBase();
    // }
    // $setting = $db->select("SELECT * FROM `websetting`;")->fetch();
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        

    <link rel="stylesheet" href="/css/admin/bootstrap.min.css" >
    <link href="/css/admin/style.css" rel="stylesheet" >
        
    <link rel="shortcut icon" href="<?php // echo $setting['icon'] ;?>" type="image/x-icon" />

    <script src="https://kit.fontawesome.com/90d90f8831.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">
    <title>EchoCast</title>

</head>
<body>

<nav class="navbar  navbar-light bg-gradiant-green-blue nav-shadow">

    <a class="navbar-brand" href="/admin"><?php // echo $setting['title'] ;?></a>
    <span class="">
        <?php
        /*
        $unseenComments = $db->select("SELECT COUNT(*) FROM `comments` WHERE `status` = 'unseen' ;")->fetch();
        $username = $db->select("SELECT * FROM `users` WHERE( `id` = '".$_SESSION['user']."') ;")->fetch();
        */
        ?>
                <a class="text-decoration-none px-3 text-dark" href="/admin/comment"><i class="fas fa-comments"></i> <?php //if($unseenComments['COUNT(*)']) {?><span class="badge badge-danger"><?php // echo $unseenComments['COUNT(*)'] ?> new!!!</span> <?php //}?></a> <span class="badge badge-danger"></span> </a>
            <span class="dropdown">
                <a class="dropdown-toggle text-decoration-none text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"><?php // echo $username['username'] ?></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/logout">logout</a>
                </div>
            </span>
       </span>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block pt-3 bg-sidebar sidebar px-0">
            <a class="text-decoration-none d-block py-1 px-2 mt-1" href="/admin"><i class="fas fa-home"></i> Admin Page</a>
            <a class="text-decoration-none d-block py-1 px-2 mt-1" href="/"><i class="fas fa-house-user"></i> Home Page</a>
            <a class="text-decoration-none d-block py-1 px-2 mt-1" href="/admin/info"><i class="fas fa-clipboard-list"></i> Informations</a>
            <a class="text-decoration-none d-block py-1 px-2 mt-1" href="/admin/dev"><i class="fab fa-dev"></i> Developers</a>
            <a class="text-decoration-none d-block py-1 px-2 mt-1" href="/admin/podcast"><i class="fas fa-podcast"></i> Podcasts</a>
            <a class="text-decoration-none d-block py-1 px-2 mt-1" href="/admin/guest"><i class="fas fa-mug-hot"></i> Guests</a>
            <a class="text-decoration-none d-block py-1 px-2 mt-1" href="/admin/comment"><i class="fas fa-comments"></i> Comments</a>
            <a class="text-decoration-none d-block py-1 px-2 mt-1" href="/admin/user"><i class="fas fa-users"></i> Users</a>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">