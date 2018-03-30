<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Embracing Machine Learning and AI</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<?php include "nav.php"; ?>
<br>
<br>
<div class="container">
<div class="row center">
        <h5 class="header col s12 light">Welcome to my blog. Browse according to your level: </h5>
</div>


<div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4 center">
          <a href="beginner.php">
           <div class="card-panel green z-depth-2">
          <span class="white-text">Beginner
          </span>
        </div>
        </a>
        </div>

          <div class="col s12 m4 center ">
          <a href="intermediate.php">
          <div class="card-panel blue z-depth-2">
          <span class="white-text">Intermediate
          </span>
           </div>
           </a>

          </div>
        
          <div class="col s12 m4 center">
           <a href="advanced.php">
           <div class="card-panel orange z-depth-2">
          <span class="white-text">Advance
          </span>

        </div>
        </a>
      </div>
        
    </div>

    </div>
    
    <div class="section">
        <div class="row center">
        <h5 class="header col s12 light">Or Check out some of the latest posts: </h5>
        </div>
    </div>
</div>


</div>
<div class="container" id="startPosts">
<div class="row">
    <div class="col s12 m10 offset-m1 l9 offset-l1">
                  <div class="post-preview">
                    <a href="deeplearning13feb16.php">
                        <h4 class="post-title titleFont">
                           Basics of Deep Learning
                        </h4>
                        <h6 class="post-subtitle subTitleFont ">
                           <span class="pink-text">What Deep Learning is? Why the hype?</span>
                        </h6>
                    </a>
                   <p class="post-meta"><i class="fa fa-clock-o"></i> 13th Feb 2017</p>
                </div>
                <hr>  
    </div>
  </div>
  <div class="row">
    <div class="col s12 m10 offset-m1 l9 offset-l1">
                  <div class="post-preview">
                    <a href="perceptron.php">
                        <h4 class="post-title titleFont">
                           Implementing Perceptron Learning Algorithm
                        </h4>
                        <h6 class="post-subtitle subTitleFont ">
                           <span class="pink-text"> To understand how perceptron model works for linearly seperable data.</span>
                        </h6>
                    </a>
                   <p class="post-meta"><i class="fa fa-clock-o"></i> 12th Feb 2017</p>
                </div>
                <hr>
                     <div class="row">
          <a href="browse.php" class="btn-large waves-effect waves-light blue lighten-2">Older posts<i class="fa fa-chevron-right"></i></a>
        </div>      
    </div>
  </div>
</div>

<?php include 'footer.php'?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
