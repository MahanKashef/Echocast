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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- FontAwsome end -->

    <!-- main CSS -->
    <link rel="stylesheet" href="/css/contact-us.css">
    <!-- main CSS end -->

    <title>Contact us</title>

</head>
<body>
      

        <!-- Container -->
        <div class="container">
          <!-- Contact Us Box -->
            <div class="row">
              <!-- Left Side -->
                <div class="col-lg" id="Left-Side">
                    <div class="information">
                    
                    <p class="h2">تماس با ما:</p>
                    <hr class="line">
                    <p class="h5 text-justify explain-text">برای تماس با ما می توانید از راه های ارتباطی زیر کمک بگیرید : </p>
                    <?php foreach($info as $items) {
                      $items = (array) $items; 
                    ?>
                    <Address>
                        <i class="fa fa-location-arrow" aria-hidden="true" id="location-icon"> : </i>
                        <p><?php echo $items['address']; ?></p>
                    {{-- <p> خراسان جنوبی - بیرجند - دانشگاه بیرجند(شوکت آباد)</p> --}}
                    </Address>
                    <i class="fa fa-phone" aria-hidden="true" id="phone-icon"> : </i>
                    <p><?php echo $items['number1'] ?></p>
                    {{-- <p>0916#######</p> --}}
                    <i class="fa fa-envelope" aria-hidden="true" id="email-icon"> : </i>
                    <p><?php echo $items['gmail']; ?></p>
                    {{-- <p>info@gmail.com</p> --}}
                    </div>
                    <hr class="line">
                    <div class="maps">
                        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3351.964893344338!2d59.28705241505706!3d32.84618118776301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f1a432da9427835%3A0xc004c32a13d37178!2sUniversity%20of%20Birjand!5e0!3m2!1sen!2smx!4v1614783587073!5m2!1sen!2smx" width="100%" height="250px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <?php } ?>
                </div>
              <!-- Left side End -->

              <!-- Right Side -->
                <div class="col-lg" id="Right-Side">
                  <!-- Form -->
                    <div class="info-form">
                        <form>
                            <!-- NAME/LAST NAME INPUT & Email -->
                            <div class="form-row">
                              <!-- NAME/LAST NAME -->
                              <div class="form-group col-md-6">
                                <label for="Name">:نام/نام خانوادگی</label>
                                <input type="text" class="form-control" id="" placeholder="عادل هاشمی">
                              </div>
                              <!-- NAME/LAST NAME END -->
                              
                              <!-- EMAIL -->
                              <div class="form-group col-md-6">
                                <label for="Email">:ایمیل</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="ایمیل">
                              </div>
                              <!-- EMAIL END -->
                            </div>
                             <!-- NAME/LAST NAME INPUT & Email END -->

                             <!-- TEXT-BOX -->
                            <div class="form-group">
                              <label for="Message">:پیام خودرا بنویسید</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                            </div>
                            <!-- TEXT-BOX END -->

                            <!-- SUBMIT BUTTON -->
                            <button type="submit" class="btn btn-primary" id="Send-Button">ارسال</button>
                            <!-- SUBMIT BUTTON END -->
                          </form>
                   <!-- Form End -->

                   <!-- Other Text & Icon -->
                          <hr class="line">
                          <div class="other">
                            <p class=" h5 Other-text"> ⥪ بی صبرانه منتظر پیشنهادات و انتقاد های شما هستیم ⥬ </p>
                            <p class=" h6 Other-text">ما را در شبکه های اجتماعی زیر دنبال کنید </p>
                          </div>
                          <!-- Icon -->
                          <div class="icon">
                            <a href="#"><i class="bi bi-telegram" id="telegram-icon"></i></a>
                            <a href="#"><i class="bi bi-instagram" id="instagram-icon"></i></a>
                            <a href="#"><i class="bi bi-twitter" id="twitter-icon"></i></a>
                          </div>
                    <!-- Other Text & Icon End -->
                    </div>
                </div>
              <!-- Right Side End -->
            </div>
          <!-- Contact Us Box End -->
        </div>
        <!-- Container End -->




<!-- ------------------------------------------------------------------------------------------------------------------------------------------- -->
    
 


</body>
</html>

@endsection
