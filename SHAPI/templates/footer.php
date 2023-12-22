     <!-- Footer -->
     <footer class="page-footer grey darken-4 amber-text">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h1 class="amber-text center">AniNeru</h1>
              <p class="amber-text center" style="font-size: 13pt;">S &nbsp;e &nbsp;l&nbsp;f &nbsp;&nbsp;T&nbsp;a&nbsp;u&nbsp;g&nbsp;h&nbsp;t&nbsp;&nbsp; A&nbsp;r&nbsp;t&nbsp;i&nbsp;s&nbsp;t&nbsp;&nbsp; &&nbsp;&nbsp; A&nbsp;n&nbsp;i&nbsp;m&nbsp;a&nbsp;t&nbsp;o&nbsp;r</p>
            </div>
            <div class="col l4 offset-l2 s12 center">
              <h4 class="amber-text center">Links</h4>
              <p class="contact" style="font-size: 13pt;">Contact me in these links below</p>
              <ul>
                <li>
                  <a class="btn-floating btn-large waves-effect waves-darken pulse amber" href="./https://instagram.com/_anineru?igshid=NzZhOTFlYzFmZQ=="><i class="fa fa-instagram black-text" aria-hidden="true"></i></a>
                  <a class="btn-floating btn-large waves-effect waves-darken pulse amber" href="./https://www.facebook.com/profile.php?id=100091417051963"><i class="fa fa-facebook-f black-text"></i></a>
                  <a class="btn-floating btn-large waves-effect waves-darken pulse amber" href="./https://www.youtube. com/channel/UC4ODIPFkHWjTRx5Mkesu46w"><i class="fa fa-youtube-play black-text" aria-hidden="true"></i></a>
                  <a class="btn-floating btn-large waves-effect waves-darken pulse amber" href="./https://l.facebook.com/l.php?u=https%3A%2F%2Ftwitter.com%2FAniNeru%3Ffbclid%3DIwAR0_Qu2bMnCqsay_BtrKFYo6Y8NKX7w1z1wrvHW-TiDotVpoV7QNpyq9CRE&h=AT3B6rHOM2stRkNDHmqmL9rr59w5bJWIhgaTYV5EltPeLJJGzTRe6YmYS9LOmGGqL4pP6YU1Pa0aZeC8a2CS4leJ0VZ7fWeEPI99BpxhF8OMHlnsC6_qLF0BcAplfeV_4RXiqd_c7Bv3nhD_OBkn">
                    <i class="fa fa-twitter black-text" aria-hidden="true"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright grey darken-4 amber-text">
          <div class="container">
            <div class=" center row col s12 m12 l12">© 2023 Copyright AniNeru</div>
          <!-- <a class="grey-text text-lighten-4 right" href="#!">More Links</a> -->
          </div>
        </div>
      </footer>

    <script src="/js/code.jquery.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="/js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
          $("#do_login").click(function() { 
              closeLoginInfo();
              $(this).parent().find('span').css("display","none");
              $(this).parent().find('span').removeClass("i-save");
              $(this).parent().find('span').removeClass("i-warning");
              $(this).parent().find('span').removeClass("i-close");
       
                var proceed = true;
                $("#login_form input").each(function(){
            
                    if(!$.trim($(this).val())){
                        $(this).parent().find('span').addClass("i-warning");
                      $(this).parent().find('span').css("display","block");  
                        proceed = false;
                    }
                });

                if(proceed) //everything looks good! proceed...
                {
                    $(this).parent().find('span').addClass("i-save");
                    $(this).parent().find('span').css("display","block");
                }
        });

      //reset previously results and hide all message on .keyup()
      $("#login_form input").keyup(function() { 
          $(this).parent().find('span').css("display","none");
      });
 
    openLoginInfo();
    setTimeout(closeLoginInfo, 1000);
  });

  function openLoginInfo() {
    $(document).ready(function(){ 
      $('.b-form').css("opacity","0.01");
      $('.box-form').css("left","-37%");
      $('.box-info').css("right","-37%");
    });
  }

  function closeLoginInfo() {
    $(document).ready(function(){ 
      $('.b-form').css("opacity","1");
      $('.box-form').css("left","0px");
      $('.box-info').css("right","-5px"); 
    });
  }

  $(window).on('resize', function(){
      closeLoginInfo();
  });



    </script>

    </script>
</body>