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
<div class="container">
<br>
  <h3>Recent Projects: </h3>
  <div class="row">
    <div class="col s4 m4">
      <div class="card">
        <div class="card-image">
          <img src="images/zeppelin.jpg">
          <span class="card-title"></span>
        </div>
        <div class="card-content">
          <p>Attendance Dashboard - Creating Interactive Visualisations using Zeppelin.</p>
        </div>
        <div class="card-action">
          <a href="projects/1attendancedashboard.php">View Project</a>
        </div>
      </div>
    </div>
    <div class="col s4 m4">
      <div class="card">
        <div class="card-image">
          <img src="images/crimecard.png">
          <span class="card-title"></span>
        </div>
        <div class="card-content">
          <p>Crime Predictions and Analysis - District Wise Crime Analysis in India from 2001-2012. Various interactive visualisations using plotly framework and Crime predictions on crime against women.</p>
        </div>
        <div class="card-action">
          <a href="projects/2crimeanalysis.php">View Project</a>
        </div>
      </div>
    </div>
    <div class="col s4 m4">
      <div class="card">
        <div class="card-image">
          <img src="images/sample-1.jpg">
          <span class="card-title">Statistics and Machine Learning</span>
        </div>
        <div class="card-content">
          <p>Basics of Descriptive Statistics, Principal Components Analysis, Clustering and comparing various Machine Learning models.</p>
        </div>
        <div class="card-action">
          <a href="3statisticsandmachinelearning.php">Open Project</a>
        </div>
      </div>
    </div>
  </div>

<!--
ONE ROW OF PROJECTS
<div class="row">
    <div class="col s4 m4">
      <div class="card">
        <div class="card-image">
          <img src="images/sample-1.jpg">
          <span class="card-title">Attendance Dashboard</span>
        </div>
        <div class="card-content">
          <p>Creating Interactive Visualisations using Zeppelin.</p>
        </div>
        <div class="card-action">
          <a href="">View Project</a>
        </div>
      </div>
    </div>
    <div class="col s4 m4">
      <div class="card">
        <div class="card-image">
          <img src="images/sample-1.jpg">
          <span class="card-title">Crime Predictions and Analysis</span>
        </div>
        <div class="card-content">
          <p>District Wise Crime Analysis in India from 2001-2012. Various interactive visualisations using plotly framework and Crime predictions on crime against women.</p>
        </div>
        <div class="card-action">
          <a href="#">View Project</a>
        </div>
      </div>
    </div>
    <div class="col s4 m4">
      <div class="card">
        <div class="card-image">
          <img src="images/sample-1.jpg">
          <span class="card-title">Statistics and Machine Learning</span>
        </div>
        <div class="card-content">
          <p>Basics of Descriptive Statistics, Principal Components Analysis, Clustering and comparing various Machine Learning models.</p>
        </div>
        <div class="card-action">
          <a href="#">Open Project</a>
        </div>
      </div>
    </div>
  </div>
  -->



</div>
<?php include 'footer.php' ?>
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</body>
</html>
