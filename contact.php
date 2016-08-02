<!DOCTYPE html>
<html>
  <head>
    <title>Samson's Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="mystyle.css">
    <link href='https://fonts.googleapis.com/css?family=Patrick+Hand+SC' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
      function validateForm() {
        var x = document.forms["contact_form"]["first_name"].value;
        if (x == null || x == "") {
          alert("A first name is required");
          $("#first_req").text(" * ");
          return false;
        } 
        var x = document.forms["contact_form"]["last_name"].value;
        if (x == null || x == "") {
          alert("A last name is required");
          $("#last_req").text(" * ");
          return false;
        } 
        var x = document.forms["contact_form"]["mail"].value;
        if (x == null || x == "") {
          alert("An email address is required");
          $("#mail_req").text(" * ");
          return false;
        } 
        var x = document.forms["contact_form"]["message"].value;
        if (x == null || x == "") {
          alert("A Message is required");
          $("#message_req").text(" * ");
          return false;
        } 
      }
    </script>
  </head>
  <body>

    <!-- add another nav bar over here -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <span id="sam">S A M S O N</span>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">HOME <span class="sr-only">(current)</span></a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="index.html">PORTFOLIO</a></li>
            <li><a href="contact.php">CONTACT</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container">

    <div class="container initial-top">
      <h1 class="center-me">LEAVE A MESSAGE</h1>
    </div>
    <br><br><br>


      <form action="email.php" onsubmit="return validateForm()" method="post" name="contact_form">
        <div class="row row-margin-bottom">
          <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
              <label>First Name<span id="first_req" style="color:red;"></span></label>
              <input name="first_name" id="first_name" type="text" class="form-control" aria-describedby="emailHelp" placeholder="First Name">
            </div>
          </div>
          <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
              <label>Last Name<span id="last_req" style="color:red;"></span></label>
              <input name="last_name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Last Name">
            </div>
          </div>
        </div>
        <div class="row row-margin-bottom">
          <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
              <label>Email Address<span id="mail_req" style="color:red;"></span></label>
              <input name="mail" id="mail" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
          </div>
          <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
              <label>Subject</label>
              <input name="subject" id="subject" type="text" class="form-control" placeholder="Enter Subject">
            </div>
          </div>
        </div>
        <div class="row-margin-bottom">
          <div class="form-group">
              <label>Message<span id="message_req" style="color:red;"></span></label>
            <textarea name="message" id="message" class="form-control" rows="8"></textarea>
          </div>
        </div>
        <br>
        <div class="center-me">
          <button class="btn btn-primary" type="submit" name="submit" id="submit" value="Submit">Submit</button>

          <button style="margin-left:1%;" class="btn btn-primary" type="reset" name="Reset" id="reset" value="Reset">Reset</button>
          
        </div>
      </form>

      <div class="page-header" id="contact_id">
        <h1>Connect</h1>
      </div>	    
    
      <div align="center">
        <div class="no_active">
          <a href="https://plus.google.com/110115752151301059913">
            <img src="https://i.imgsafe.org/a50384f.png">
          </a>
          <a href="https://www.facebook.com/samson.chua.3">
            <img src="https://i.imgsafe.org/a5a5503.png">
          </a>
          <a href="https://github.com/DaSammich">
            <img src="https://i.imgsafe.org/ac723e5.png">
          </a>
          <a href="https://www.linkedin.com/in/samson-chua-868395b7">
            <img src="https://i.imgsafe.org/b5c89d0.png">
          </a>
          <div class="no_active">
          </div>
        </div>
      </div>
      <br>
    </div>

  </body>
</html>

