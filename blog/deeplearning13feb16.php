 <!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Embracing Machine Learning and AI</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<?php include 'nav.php' ?>
 <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h3 class="header center orange-text"> Basics of Deep Learning</h3>
      <div class="row center">
        <h5 class="header col s12 light">When in doubt go deep!</h5>
      </div>
     </div> 
  </div>
   <div class="container">
    <div class="row">
      <div class="col s12">
        <h5>Description:</h5><h6>
            Deep learning is a way to solve complex problems by recognizing various patterns in the data using the inter-connection(synapses) between the nodes hidden in various (deep)layers. A simple neural network isn't able to capture the complexity in the data, hence Deep networks were born. But what's a Neural Network? A neural network has a set of input nodes each describing a specific feature(such as height, weight etc.). These nodes are connected to each of the nodes in the following layers using the edges. These edges have a weight which decides if the output from the neuron will affect the node in next layer(which is the output layer at some point.) Each layer has multiple nodes. So 1st layer of nodes(example in image recoginition) might be descibing the color pattern, next might be describing the face features such as eyes, nose etc. and so on. When the output layer is reached the results are matched with the training dataset and cost is calculated. Cost function that defines the relationship of error between predicted and training output. Using this cost weight in the networks are adjusted so that the errors/cost can be reduced. This is done during training. Finally on the testing data at the output layer, the adjusted weight fires the neuron with the most likely output and prediction is obtained. So deep learing is basically a NN with multiple layers in between. A disadvantage is that it requires more training time then regular models.(SVM, Decision trees, Logistic regression etc.) And they are hard to train to train too.
        </h6><br>
        <h5>Type of Net to use:</h5><h6>
          <br> For Unlabelled data, feature extraction and pattern recoginition use RBM(Restricted Boltzmann Machines), Autoencoders.
          <br>For Labelled data use RNTN(Recurrent Net Tensor Network, Recurrent Net for Text Processing; DBN(Deep belief net), Convolutional Net for Image Recoginition; RNTN, Convolutional Net for Object Recoginitionn; Recurrent net for Speech Recoginition.
          <br>
          MLP(Multi layer Preceptron) and RELU are good for classification. For time series use Recurrent Net.
        </h6>
        <h5>Problem with Deep Net: Gradient Vanishes</h5>
        <h6>Backpropogation is a way to train Deep Nets. It takes a lot of time and accuracy is low. <br> The cost has to be minimized. Gradient: way to measure the change in cost w.r.t weight. So the problem is gradient becomes smaller and smaller as we backpropogate and the starting layers takes time to compute even while being the simplist and if they are wrong the output from that layer to the next during forward propogation is inaccurate.<br> What is backpropogation? So after we determine the cost during forward propogation we have to adjust the weights. Backpropogation is the forward propagation from the output ->(to) input layer to adjust the weights. Gradient calculation becomes hard at each node(as it is the multiplication of each gradient upto that point.)</h6>

      </div>
    </div>
     <div class="row">
         <div class="col s12">
              <!-- GHIST HERE -->
         </div>
     </div>
  </div>
<?php include 'footer.php' ?>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>
  </body>
  </html>
