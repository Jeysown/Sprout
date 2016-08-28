<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sprout</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
     <link rel="stylesheet" href="fonts/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
     <link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">
  </head>
  <body style="padding-top:50px;">
<?php include 'header.php'; ?>

        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 main" style="padding-right: 0px;padding-left: 0px;">

      <div class="map" id="map" style="margin-bottom:20px;">
      </div>

    </div>
    <div class="container">
      <div class="row">

<?php include 'report_access.php'; ?>
<div style="text-align:center">
  <h1>Planted Trees</h1>
<p class="bilang">1,198,199</p>

</div>

<div class="panel panel-primary filterable">
    <div class="panel-heading" style="padding:25px;">

        <div class="dropdown">

     </div>

        <div class="pull-right" style="margin-top:-15px;">
            <button class="btn btn-default btn-sm btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
        </div>
    </div>

                <table class="table" >
                    <thead>
                        <tr class="filters">
                            <th><input type="text" class="form-control" placeholder="Status" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Date" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Time" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Latitude" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Longtitude" disabled></th>
                        </tr>
                    </thead>
                    <tbody>




          <?php
          $output='';

                for ($i=0; $i < count($all) ; $i++) {
                  $output .="<tr>";

                for ($j=0; $j < 5 ; $j++) {
                $output .= "<td>" .$all[$i][$j]. "</td>";
                }
                      $output .= "</tr>";
            }
              echo $output;
            ?>

                    </tbody>
                </table>
            </div>

<br><br>

</div>
    </div>
<?php include 'footer.php'; ?>
