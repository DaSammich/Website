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
            <li><a href="#about_id">ABOUT</a></li>
            <li><a href="index.html">PORTFOLIO</a></li>
            <li><a href="contact.php">CONTACT</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <?php 

      $to = "samsonchua1990@gmail.com";
      $first_name =  htmlspecialchars($_POST['first_name']);
      $last_name =  htmlspecialchars($_POST['last_name']);
      $mail =  htmlspecialchars($_POST['mail']);
      $subject =  htmlspecialchars($_POST['mail']);
      
      $message =  $first_name . " " . $last_name . " " . $mail . "<br><br>" . htmlspecialchars($_POST['message']);
      
      $headers  = "From: $first_name $last_name <$\mail>\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
      

      mail ($to, $subject, $message, $headers);
 
    ?>

    <div class="container center-me">
      <br><br><br><br><br><br>
    	<h2>Thank you! Your email has been sent.</h2>
    </div>

  </body>
</html>

