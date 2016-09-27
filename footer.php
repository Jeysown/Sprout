<div class="footer" >

  <footer class="footer1" >
    <div class="footer-text">
    <a href="#" style="color: #4CAf50;"> <i class="fa fa-twitter-square" aria-hidden="true" style="font-size: 40px;"></i></a>
    <a href="#" style="color: #4CAf50;"><i class="fa fa-facebook-square" aria-hidden="true" style="font-size: 40px;padding-left:10px;"></i></a>
    <a href="#" style="color: #4CAf50;"><i class="fa fa-instagram" aria-hidden="true" style="font-size: 40px;padding-left:10px;"></i></a>
    <a href="#" style="color: #4CAf50;"><i class="fa fa-envelope-square" aria-hidden="true" style="font-size: 40px;padding-left:10px;"></i></a>
    <div style="padding-top:10px;padding-bottom:10px;"><a href="index.php" style="color: #4CAf50;"><h3 style="display:inline;">Events</h3></a><h3 style="display:inline;padding-left:10px;">|</h3><a href="planted.php" style="color: #4CAf50;"><h3 style="display:inline;">Planted</h3></a><h3 style="display:inline;padding-left:10px;">|</h3><a href="reports.php" style="color: #4CAf50;"><h3 style="display:inline;padding-left:10px;">Reports</h3></a><h3 style="display:inline;padding-left:10px;">|</h3>
      <a href="help.php" style="color: #4CAf50;"><h3 style="display:inline;padding-left:10px;">Help</h3><h3 style="display:inline;padding-left:10px;">|</h3>
        <a href="signup.php" style="color: #4CAf50;"><h3 style="display:inline;padding-left:10px;">Sign Up</h3></a><h3 style="display:inline;padding-left:10px;">|</h3>
          <a href="login.php" style="color: #4CAf50;"><h3 style="display:inline;padding-left:10px;">Log In</h3></a></a></div>
      <i class="fa fa fa-phone-square" aria-hidden="true" style="font-size:20px;display:inline;"><h4 style="display:inline;"> &emsp;(632) 927-47-88</h4></i><br>
        <i class="fa fa fa-fax" aria-hidden="true" style="font-size:20px;display:inline;"><h4 style="display:inline;"> &emsp;(632) 920-03-74</h4></i><br>
      </div>
  </footer>
    <footer class="footer2" >
      <div class="footer-text">
      <h4>Sprout: Spreading out for the future</h4>
        <p> Copyright © 2016 Innovators. All Rights Reserved</p>
        </div>
    </footer>
</div>
  </body>
</html>
<script type="text/javascript" src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAolqrs1RmBOGIJIu4rIe4SJFA6CB1lI58&callback=initMap"></script>
<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
<script src="js/chart.js" charset="utf-8"></script>
<script type="text/javascript">

    var safeArray=<?php echo json_encode( $safe ) ?>;
		var dangerArray= <?php echo json_encode( $danger ) ?>;
	var warningArray= <?php echo json_encode( $warning ) ?>;
 </script>
<script src="js/maps-reports.js" charset="utf-8"></script>
<script src="js/filter.js" charset="utf-8"></script>
<script>
var $grid = $('.grid1').imagesLoaded( function() {
$grid.masonry({
  itemSelector: '.grid-item1',
  percentPosition: true,
  columnWidth: '.grid-sizer1'
});
});

</script>

              <script>
              $(document).ready(function(){
                  $("#flip").click(function(){
                      $("#panel").slideToggle("slow");

                  });
              });
              $(document).ready(function(){
                  $("#flip1").click(function(){
                      $("#panel1").slideToggle("slow");

                  });
              });
              $(document).ready(function(){
                  $("#flip2").click(function(){
                      $("#panel2").slideToggle("slow");

                  });
              });
              $(document).ready(function(){
                  $("#flip3").click(function(){
                      $("#panel3").slideToggle("slow");

                  });
              });
              $(document).ready(function(){
                  $("#flip4").click(function(){
                      $("#panel4").slideToggle("slow");

                  });
              });
              $(document).ready(function(){
                  $("#flip5").click(function(){
                      $("#panel5").slideToggle("slow");

                  });
              });
              </script>
