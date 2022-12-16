@section('footer')
<!-- footer -->
<footer class="w3l-footer-16">
    <div class="footer-content py-lg-5 py-4 text-center">
        <div class="container">
            <div class="row copy-right">
                <div class="col-lg-6 footer-left text-lg-left text-center">
                    <h6>© 2020 Freaky.Made with <span class="fa fa-heart" aria-hidden="true"></span> love.Design by <a
                            href="https://w3layouts.com/" target="_blank">
                            W3Layouts</a></h6>
                </div>
                <div class="col-lg-6 footer-right text-lg-right text-center">
                    <ul class="footer-gd-16">
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                    <div class="share-icons-footer ml-lg-4">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                    </div>
                </div>
            </div>
            <button onclick="topFunction()" id="movetop" title="Go to top">
                <span class="fa fa-angle-up"></span>
            </button>
        </div>
    </div>

    <!-- move top -->
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
    <!-- //move top -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
</footer>
<!-- //footer -->


<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->

<!--//-->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!--/scroll-down-JS-->
<script>
  $(function () {
    $('a[href*=#]').on('click', function (e) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top
      }, 500, 'linear');
    });
  });
</script>
<!--//scroll-down-JS-->
<!-- /typig-text-->
<script>
  const typedTextSpan = document.querySelector(".typed-text");
  const cursorSpan = document.querySelector(".cursor");

  const textArray = ["Back-End Developer", 'Front-End Developer', 'Web Designer'];
  const typingDelay = 200;
  const erasingDelay = 10;
  const newTextDelay = 100; // Delay between current and next text
  let textArrayIndex = 0;
  let charIndex = 0;

  function type() {
    if (charIndex < textArray[textArrayIndex].length) {
      if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
      typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
      charIndex++;
      setTimeout(type, typingDelay);
    } else {
      cursorSpan.classList.remove("typing");
      setTimeout(erase, newTextDelay);
    }
  }

  function erase() {
    if (charIndex > 0) {
      // add class 'typing' if there's none
      if (!cursorSpan.classList.contains("typing")) {
        cursorSpan.classList.add("typing");
      }
      typedTextSpan.textContent = textArray[textArrayIndex].substring(0, 0);
      charIndex--;
      setTimeout(erase, erasingDelay);
    } else {
      cursorSpan.classList.remove("typing");
      textArrayIndex++;
      if (textArrayIndex >= textArray.length) textArrayIndex = 0;
      setTimeout(type, typingDelay);
    }
  }

  document.addEventListener("DOMContentLoaded", function () { // On DOM Load initiate the effect
    if (textArray.length) setTimeout(type, newTextDelay + 250);
  });
</script>
<!-- //typig-text-->
<!-- for blog carousel slider -->
<script src="assets/js/owl.carousel1.js"></script>
<script>
  $(document).ready(function () {
    $("#owl-demo2").owlCarousel({
      items:1,
		        lazyLoad : true,
		        autoPlay : true,
		        navigation : false,
			    navigationText : ["",""],
			    rewindNav : false,
			    scrollPerPage :true,
			    pagination : false,
    			paginationNumbers: false,

    })
  })
</script>


<!-- //for blog carousel slider -->
<!-- jQuery-Photo-filter-lightbox-portfolio-plugin -->
<script src="assets/js/jquery-1.7.2.js"></script>
<script src="assets/js/jquery.quicksand.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/jquery.prettyPhoto.js"></script>
<!-- //jQuery-Photo-filter-lightbox-portfolio-plugin -->

<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
@endsection
