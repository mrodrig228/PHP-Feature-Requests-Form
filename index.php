<?php

if ($_POST['submit']) {
  
  if (!$_POST['name']) {
    $error.="<br>- Please enter your name.";
  }

  if (!$_POST['request']) {
    $error.="<br>- Please enter a request name.";
  }

  if (!$_POST['details']) {
    $error.="<br>- Please provide details for this feature.";
  }

  if (!$_POST['check']) {
    $error.="<br>- Please check the box in order to submit.";
  }

  if ($error) {
    $result='<div class="alert alert-danger" role="alert">Whoops! Looks like you\'re missing some information: '.$error.' </div>';
  }
  
  else {
  $result='<div class="alert alert-success" role="alert"> Thank you for your submission!  Your submission will be reviewed shortly.  </div>';
  } 

}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Feature Request</title> <!-- test this -->

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
  <section id="contact">
    
    <div class="container">
      
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1>Contact Form</h1>

          <?php echo $result;?>

          <p>Submit your feature request here.</p>

          <form method="post" role="form">
            
            <div class="form-group">
              <input type="text"  name="name" class="form-control" placeholder="Your name" maxlength="75" value="<?php echo $_POST['name']; ?>">
            </div>

            <div class="form-group">
              <input type="text" maxlength="120" name="request" class="form-control" placeholder="The name of your request.  Keep it short." value="<?php echo $_POST['request']; ?>">
            </div>

            <div class="form-group">
                <textarea name="details" maxlength="1000" rows="6" class="form-control" placeholder="Details of the feature request.  i.e. Who it will it affect, what it should do, why it's needed." ><?php echo $_POST['details']; ?></textarea>
            </div>
                
              
            <div class="checkbox">
              <label>
                <input type="checkbox" name="check"> I am human.
              </label>
            </div>
              
            <div align="center">
              <input type="submit" name="submit" class="btn btn-secondary" value="Submit request">
            </div>

          </form>

        </div>

      </div>

    </div>

  </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>