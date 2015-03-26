  <div class="container">
    <ul class="list-inline">
      <li> <a href="http://localhost/proyecto"><img class="img-responsive" src="<?php echo $resources.'/img/canarycoach.png'?>" width="200" height="90" title="canarycoach" alt="canarycoach"></a></li>
      <li>FB</li>
      <li>G+</li>
    </ul>
  </div>
  <script> 
      $(document).ready(function() {
        $("#owl-demo").owlCarousel({

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
