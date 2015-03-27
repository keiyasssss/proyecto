  <div class="container">
    <ul class="list-inline" align="center">
      <li> <a href="http://localhost/proyecto"><img class="img-responsive" src="<?php echo $resources.'/img/canarycoach.png'?>" width="300" height="200" title="Canary Coach" alt="canarycoach"></a></li>
      <li><a href="http://www.facebook.com"><img class="img-responsive" src="<?php echo $resources.'/img/Facebook.png'?>" title="Facebook" alt="facebook"></a></li>
      <li><a href="http://plus.google.com"><img class="img-responsive" src="<?php echo $resources.'/img/google_plus.png'?>" title="Google Plus" alt="googleplus"></a></li>
    </ul>
  </div>

  <script> 
      $(document).ready(function() {
        $("#owl-principal").owlCarousel({

            navigation : false, // Show next and prev buttons
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true,
            autoPlay:5000

        });
        
        
        $('[data-toggle="tooltip"]').tooltip();
        
            
      });
      
    </script>
  </body>
</html>
