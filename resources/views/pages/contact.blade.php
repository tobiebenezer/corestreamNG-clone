<x-layout>
    <x-slot:title>
    Corestream - Nigeria - Surveillance : Robotics
        </x-slot>



<!-- about breadcrumb -->
<section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-contact py-sm-5 py-4">
        <div class="container grid-breadcrumb py-2">
            <h2 class="title-big">Contact us</h2>
            <ul class="breadcrumbs-custom-path mt-md-2">
                <li><a href="https://corestream.ng/index.html">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact Us </li>
            </ul>
        </div>
    </div>
</section>
<!-- //about breadcrumb -->
 <section class="w3l-contact-11 py-5" id="contact">
     <div class="contacts-main py-lg-5 py-md-4">
         <div class="contant11-top-bg">
             <div class="container">
                <h3 class="title-big text-center mb-md-5 mb-4">Get in touch with us</h3>
                 <div class="d-grid contact section-gap">
                     <div class="contact-info-left d-grid text-center">
                         <div class="contact-info">
                            <img src="{{asset('img/Contact/office.png')}}" alt="" class="img-fluid">
                             <h4>Address</h4>
                             <p>Suite 7b, Yakubu Gowon Way, Jos Plateau State, Nigeria</p>
                         </div>
                         <div class="contact-info">
                            <img src="{{asset('img/Contact/support.png')}}" alt="" class="img-fluid">
                             <h4>Phone</h4>
                             <p><a href="tel:+2348160876560">+234 8160 876560</a></p>
                             <p><a href="tel:+2348112819513">+234 8112 819513</a></p>
                         </div>
                         <div class="contact-info">
                            <img src="{{asset('img/Contact/envelope.png')}}" alt="" class="img-fluid">
                             <h4>Mail</h4>
                             <p><a href="https://corestream.ng/info@corestream.ng" class="email">info@corestream.ng</a></p>
                             <p><a href="https://corestream.ng/hello@corestream.ng" class="email">hello@corestream.ng</a></p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="form-41-mian mt-5 pt-lg-5 pt-md-4">
             
                 
             <div class="container">
                 
                 <div class="d-grid align-form-map">
                     <div class="form-inner-cont">
                         <div class="container card text-center text-danger">
                         <p class="alert">{{Session::get('message') }}</p>
                         </div>
                         <form action="{{ route('subscribe')}}" method="post" class="signin-form">
                             @csrf
                             <div class="form-input">
                                 <label for="w3lName">Name</label>
                                 <input type="text" name="name" id="w3lName" placeholder="">
                             </div>
                             <div class="form-input">
                                 <label for="w3lSender">Email(Required)*</label>
                                 <input type="email" name="email" id="w3lSender" placeholder="" required="">
                             </div>
                             <div class="form-input">
                                 <label for="w3lMessage">Message(Required)*</label>
                                 <textarea placeholder="" name="message" id="w3lMessage" required=""></textarea>
                             </div>

                             <button type="submit" class="btn btn-primary btn-style">Submit</button>

                         </form>
                     </div>
                     <div class="map">
                         <iframe src="https://maps.google.com/maps?q=corestream%20networks%20and%20robotics%20limited%20korinjoh%20house%20jos&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed&quot;" allowfullscreen="" frameborder="0"></iframe>
                     </div>
                 </div>
             </div>
         </div>
 </div></section>

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
      <span class="fa fa-angle-up"></span>
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->


 
 
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- //disable body scroll which navbar is in active -->


  </section><div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div><div id="lightbox" class="lightbox" style="display: none;"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="><div class="lb-nav"><a class="lb-prev" href=""></a><a class="lb-next" href=""></a></div><div class="lb-loader"><a class="lb-cancel"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div></body></html>
</x-layout>