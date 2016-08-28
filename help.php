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
  <style>
  ul{
    list-style: none;
  }
  #flip, #flip1,#flip2,#flip3, #flip4, #flip5,#flip6 {
      padding: 5px;
      text-align: left;
      background-color: #ffffff;

  }
  #flip:hover, #flip1:hover,#flip2:hover,#flip3:hover, #flip4:hover, #flip5:hover, #flip6:hover{
     cursor:pointer;
  }
  #panel, #panel1,#panel2, #panel3, #panel4, #panel5 , #panel6{
    color: black;
      padding: 50px;
      display: none;
      text-align: left;
      background-color: #ffffff;

  }
  .help{
    margin-top: -6px;
    width:2%;
  }
  .heelp{
    background-color: #fff;
    margin-bottom: 50px;
  }
  </style>
  <body>
<?php include 'header.php'; ?>
<div class="container">
  <div class="row">
      <div class="panel panel-primary filterable">
          <div class="panel-heading" style="padding:25px;">
         </div>
                      <table class="table" style="overflow-y:scroll;">
                          <thead>
                              <tr class="filters" style="font-size:30px;">
                                  <th style="text-align:center;">Legend</th>
                                  <th style="text-align:center;">Description</th>
                              </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="col-lg-4" style="text-align:center;"><img src="images/stable-level.png" alt="" style="height:67px;"/></td>
                              <td style="text-align:justify;font-size:16px;" class="col-lg-8">Blue indicator indicates that a certain forest/protected area and it's vicinity has a good to average stability with regards to the standard of the forest based on the reports that are coming from the people in the said place.
                              <br><br>
                               <b>Ex.</b> Some supposedly extinct happens to be not extinct yet, trees are growing, or any positive things that has a good effect to the forest.</td>
                            </tr>
                            <tr>
                              <td style="text-align:center;"><img src="images/warning-level.png" alt="" style="height:67px;"/></td>
                              <td style="text-align:justify;font-size:16px;">Orange - Orange indicator indicates that a certain forest/protected area has some threat of abuse, destruction or illegel loggers or even miners.
                              <br><br>  <b>Ex.</b> Some issues like over cutting of trees, illegal hunting of animals, unauthorized plant or workshop within the forest.
                              </td>

                            </tr>
                            <tr>
                              <td style="text-align:center;"><img src="images/danger-level.png" alt="" style="height:67px;"/></td>
                              <td style="text-align:justify;font-size:16px;">Red - Red indicator indicates that a certain forest/protected are has an urgent need of rescue or action from authority within 12-24 hours.
                              <br><br> <b>Ex.</b>Forest Fire, Deforestation effects like landslides and flash floods.</td>
                            </tr>
                          </tbody>
                      </table>
                  </div>
                    <center><h1 style="margin-top: 50px;">FAQ</h1></center>
                  <div class="heelp">

                      <ul>
                      <li><h4><div id="flip"> <img src="images/dropdown.png" alt="" class="help"/>How to Log In?</div></h4></li>
                        <div id="panel">
                        <br><b>1. Go to the Main Page</b>
                        <br>You can see there the Log In form.<p>
                        <br><img src="images/help/login.jpg" style="width:600px;height:300px;"><p>
                        <br><b>2. Sign In on a computer</b>
                        <br>Filled up the correct username and password, it is required. Click stay sign in if you want to remember your account then click "Log In" button to successfully login.<p>
                        <br><img src="images/help/loginexample.jpg" style="width:600px;height:300px;"><p>
                        </div>



                      <li><h4><div id="flip1"><img src="images/dropdown.png" alt="" class="help"/>How to Log Out?</div></h4></li>
                        <div id="panel1">When using public computers like in a library or cybercafe, remember that you may still be signed in to any services you’ve been using even after you close the browser. So when using a public computer, be sure to sign out.
                        <br><br><b>Sign out on a computer</b>
                        <br>In the upper right of the navigation bar, you can see there your name. Just click it then you will see the "Log Out" link to sign out. <p>
                        <br><img src="images/help/logout.jpg" style="width:600px;height:300px;">
                        </div>

                        <li><h4><div id="flip3"><img src="images/dropdown.png" alt="" class="help"/>How to Register?</div></h4></li>
                        <div id="panel3">
                        <br><b>1. Go to the Main Page</b>
                        <br>In the lower part of the Log In form, you can see there the "Register" link. Click it it to go to the registration page. <p>
                        <br><img src="images/help/login.jpg" style="width:600px;height:300px;"><p>
                        <br><b>2. Registration Form</b>
                        <br>Fill up the registration form according to the requirements. <p>
                        <br><img src="images/help/register.jpg" style="width:600px;height:300px;">
                        </div>

                      <li><h4><div id="flip2"><img src="images/dropdown.png" alt="" class="help"/>How to view a Report?</div></h4></li>
                        <div id="panel2">
                        <br><b>*For the librarian</b>
                        <br>1. In the navigation bar, find "Transaction" then look for "Borrow", click it.
                        <br><img src="help/borrow.png" style="width:220px;height:150px;"><p>
                        <br>2. Record the transaction, select the name of the borrower from the members.
                        <br><img src="help/b_name.png" style="width:200px;height:80px;">
                        <br><b>Note: Be sure they are member to borrow books</b><p>
                        <br>3. Select the name of the book to be check.
                        <br><img src="help/add_books.png" style="width:500px;height:300px;"><p>
                        <br>3. Select the due date to return the book. Then click "Borrow".
                        <br><img src="help/date.png" style="width:500px;height:300px;"><p>
                        </div>

                      <li><h4><div id="flip4"><img src="images/dropdown.png" alt="" class="help"/>How to Dowload the Mobile Application?</div></h4></li>
                        <div id="panel4">
                        <br><b>*For the librarian</b>
                        <br>1. In the navigation bar, find "Transaction" then look for "Borrow", click it.<p>
                        <br><img src="help/view_borrowed.png" style="width:220px;height:150px;"><p>
                        <br>2. Select the borrower's name and click return, it will display an option<p>
                        <br><img src="help/add_returned.png" style="width:400px;height:200px;"><p>
                        <br>*It will redirect you to all records with the date and time of the returned books.
                        <br><img src="help/status.png" style="width:600px;height:75px;"><p>
                        </div>

                        <li><h4><div id="flip5"><img src="images/dropdown.png" alt="" class="help"/>How to Convert Points?</div></h4></li>
                          <div id="panel5">
                          <br><b>*For the librarian</b>
                          <br>1. In the navigation bar, find "Transaction" then look for "Borrow", click it.
                          <br><img src="help/borrow.png" style="width:220px;height:150px;"><p>
                          <br>2. Record the transaction, select the name of the borrower from the members.
                          <br><img src="help/b_name.png" style="width:200px;height:80px;">
                          <br><b>Note: Be sure they are member to borrow books</b><p>
                          <br>3. Select the name of the book to be check.
                          <br><img src="help/add_books.png" style="width:500px;height:300px;"><p>
                          <br>3. Select the due date to return the book. Then click "Borrow".
                          <br><img src="help/date.png" style="width:500px;height:300px;"><p>
                          </div>
    </ul>

                  </div>
</div>
</div>
<?php include 'footer.php'; ?>
