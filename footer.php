
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
