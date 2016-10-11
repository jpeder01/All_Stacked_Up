<?php

    if ($_POST["submit"]) {
    

    if (!$_POST['name']) {
    
      $error="<br />Please enter your name.";
    }
  
    if (!$_POST['email']) {
    
      $error.="<br />Please enter your email address.";
    }

    if (!$_POST['comment']) {
    
      $error.="<br />Please enter a comment.";
    
    }
    
    if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      
        $error.="<br />Please enter a valid email address";
    }

    if ($error) {
      
      $result='<div class="alert alert-danger"><strong>There were error(s) in your form:</strong>'.$error.'</div>';

      } else {
        
    if (mail("rickn@asumasonry.com", "Comment from ASU website",
    
      "Name: ".$_POST['name'].
    
      "Email: ".$_POST['email'].
      
      "Comment: ".$_POST['comment'])) {
        
              $result='<div class="alert alert-success"><strong>Thank you!</strong>.  We will get right back to you regarding your question(s).</div>';

      } else {
          
              $result='<div class="alert alert-danger">Sorry, there was an error sending you message.  Please try again later.</div>';
      }
          
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
    <title>All Stacked Up Masonry</title>

   <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   <!-- Customized css-->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
  </head>
  <body>

<div class="navbar navbar-default navbar-fixed-top navbarOpacity">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html"><img src="images/logo.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
        <li class="active"><a href="contactUs.php">Contact Us</a></li>
        <li><a href="companyProfile.html">Company Profile</a></li>
        <li><a href="projects.html">Projects</a></li>
        <li><a href="partners.html">Partners</a></li>
        
      </ul>

      <h3 id="email"><a href="mailto:rickn@asumasonry.com" target="_blank"> <span class="glyphicon glyphicon-envelope"></span> Send an us email today!</a></h3>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>

  <div class="container infoContainer">
  
        <div class="col-md-6 col-md-offset-3">

    <h1 class="center">Contact us!</h1>

    <h2 class="centerParagraph">Please let us know how we can help with your next project or just drop us a note with any questions.</h2>

          <?php echo $result; ?>
                
          <form method="post">
      
            <div class="form-group">
          
            <label for="name">Your Name:</label>
          
            <input type="text" name="name" class="form-control" placeholder="Your name" value="<?php echo $_POST['name']; ?>" />
          
            </div>
            
            <div class="form-group">
          
            <label for="email">Your Email:</label>
          
            <input type="email" name="email" class="form-control" placeholder="Email address" value="<?php echo $_POST['email']; ?>" />
          
            </div>
            
            <div class="form-group">
          
            <label for="comment">Your comment:</label>
          
            <textarea class="form-control" name="comment" id="textarea" placeholder="Comment" value="<?php echo $_POST['comment']; ?>"></textarea>
          
            </div>
            
            <input type="submit" name="submit" class="btn btn-default btn-lg" id="submit" value="Submit" />
      
          </form>
      
        </div>

      </div>
  
  </div>
  
</div>

    <div class="container">
    
      <div class="row" class="center">
        
        <h1 class="center title"> Why work with All Stacked Up Masonry?</h1>
        <p class="lead center">Check out our company history, some of our projects and, trusted partners.</p>
        
      </div>
        
        <div class="row marginBottom">
        
          <div class="col-md-4 marginTop">
            <h2><a href="companyProfile.html"><span class="glyphicon glyphicon-time"></span> Company Profile</a></h2>
            <p>Be sure to read our story about the long history of All Stacked Up Masonry.</p>
            
          </div>
    
          <div class="col-md-4 marginTop">
            <h2><a href="projects.html"><span class="glyphicon glyphicon-off"></span> Projects</a></h2>
            <p>We specialize in commercial masonry projects within the senior living, multi-unit housing, and healthcare industries.</p>
            
          </div>
    
          <div class="col-md-4 marginTop">
            <h2><a href="partners.html"><span class="glyphicon glyphicon-pencil"></span> Partners</a></h2>
            <p>We work with many long time trusted partners to bring you the highest quality masonry buildings available.</p>
            
          </div>
            
        </div>
    
    </div>
    
    <div class="crew">
      
      <div class="row paddingBottom">
          
        <div class="col-md-4 col-md-offset-4 marginTop center">
    
          <h1><a href="employment-application.pdf" target="_blank"> <span class="glyphicon glyphicon-file"></span> JOIN OUR CREW!</a></h1>
          <p>We are looking for experienced Masons, Laborers and, Operators that take pride in their craft.  If that is you, download the 
          application and send it in so we can see if there may be a good fit.</p>
    
        </div>        
    
      </div>
    
    </div>
    
    <div class="container footer">
      
      <div class="row">
        
        <h1 class="center">All Stacked Up Masonry, Inc.</h1>
        
        <p class="lead center">"Building your dreams on time and on budget"</p>
        
        <h5 class="center">Copyright All Rights Reserved &copy 2016 All Stacked Up Masonry, Inc.</h3>
        
      </div>
      
    </div>
    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

  </body>

</html>