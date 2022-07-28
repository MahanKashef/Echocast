<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> --}}

    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/media/footer.media.css">
    <title>EchoCast</title>
</head>
<body>
    
<footer>
    <span class="line"></span>
     <div class="container-flex">
        <div class="info">
            <h3 class="info-text">صفحات سایت</h3>
            <ul class="info-items">
                <li class="info-item"><a href="#" class="info-link">صفحه اصلی</a></li>
                <li class="info-item"><a href="#" class="info-link">پادکست ها</a></li>
                <li class="info-item"><a href="#" class="info-link">درباره ما</a></li>
                <li class="info-item"><a href="#" class="info-link">تماس با ما</a></li>
            </ul>
            <div class="social">
                <ul class="social-items">
                    <li class="social-item"><i class="fab fa-facebook-f"></i></li>
                    <li class="social-item"><i class="fab fa-linkedin"></i></li>
                    <li class="social-item"><i class="fab fa-twitter"></i></li>
                </ul>
            </div>
        </div>
        <div class="contact">
            <h3 class="contact-text">به ما پیغام بدهید</h3>
            <form class="form-contact" action="#" method="POST">
                @csrf <!-- تضمین میکنه دیتای ارسال شده به صفحه معتبر و از جانب خود ماست -->
                <div class="form-flex">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="نام">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="ایمیل">
                    </div>
                </div>
                <div class="form-group">
                    <textarea rows="5" class="form-control" placeholder=" چطور میتوانیم کمکتان کنیم ؟"></textarea>
                </div>
                <div class="form-submit">
                    <button class="submit">
                        ثبت <span class="icon"><i class="fas fa-long-arrow-alt-right fa-rotate-180"></i></span>
                    </button>
                </div>
            </form>
        </div>
     </div>

    

</footer>
</body>
</html>