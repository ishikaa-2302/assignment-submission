<?php
  session_start();
  include("connection.php");
  //include("function.php");
  if($_SERVER['REQUEST_METHOD']=="POST")
    {
      //something was posted
      //so collect that dataa
      $name = $_POST['name'];
      $email= $_POST['email'];
      $roll=$_POST['roll'];
      $dated=$_POST['dated'];
      $img_dir=$_POST['img_dir'];
      $query= "insert into student (name,email,roll,dated,img_dir) values('$name','$email','$roll','$dated','$img_dir')";
        mysqli_query($con,$query);
        header("Location: admin.php");
        die;
      }
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Assignment Submission Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Self-executing function
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms,function(form){
            form.addEventListener('submit', function(event){
                if (form.checkValidity() === false){
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </head>
  <body style="background-color: #96c8d4;">
    <div class="container">
      <h1>Dealing with Imposter Syndrome</h1>
      <h5>Assignment Submission Form</h5>
      <!--<p class="topic">Imposter Syndrome</p>-->
      <h6>Deadline: <strong style="background-color:yellow;padding:2px;">21st September</strong></h6>
      <h6>Detailed Explanation</h6>
      <ul>
        <li>Write an essay on Imposter Sydrome</li>
        <li>Feel free to share incidents related to the topic and suggest ways on how to deal with Imposter Syndrome</li>
        <li>Avoid plagarising to avoid losing marks</li>
        <li>Your essay should not exceed 500 words</li>
      </ul>
      <h6>Total Marks : <strong>25M</strong></h6>
      <p><strong>NOTE: </strong>Your assignment should be done in <span style="background-color:yellow;padding:2px;"><strong>pdf format</strong></span> only</p>
    </div>
    <div class="container">
        <form class="needs-validation" enctype="multipart/form-data" method="post" novalidate>

          <div class="form-group row">
              <label class="col-sm-3 col-form-label" for="name">Your Name:</label>
              <div class="col-sm-9">
                  <input name="name" type="name" class="form-control" id="name" placeholder="First Name" required>
              </div>
          </div>

          <div class="form-group row">
              <label class="col-sm-3 col-form-label" for="email">Email Address:</label>
              <div class="col-sm-9">
                  <input name="email" type="email" class="form-control" id="email" placeholder="Email Address" required>
              </div>
          </div>

          <div class="form-group row">
              <label class="col-sm-3 col-form-label" for="text">Registration Number:</label>
              <div class="col-sm-9">
                  <input name="roll" type="text" class="form-control" id="text" placeholder="Registration Number" required>
              </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="date">Date of Submission:</label>
            <div class="col-sm-9">
              <input name="dated" type="date" class="form-control" name="date" id="date" placeholder="Enter date of submission" required>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="link">Attach your document:</label>
            <div class="col-sm-9">
              <input name="img_dir" type="text" class="form-control" id="link" placeholder="Enter link for submission" required>
            </div>
          </div>

          <div class="form-group row">
              <div class="col-sm-9 offset-sm-3">
                  <label class="checkbox-inline">
                      <input type="checkbox" class="mr-1" value="agree" required> I understand I have to my submit Original Work
                  </label>
              </div>
          </div>

          <div class="form-group row">
              <div class="col-sm-9 offset-sm-3">
                  <button type="submit" name="btn" class="btn btn-success">Submit</button>
                  <!--<input type="submit" class="btn btn-success" value="Submit">-->
                  <input type="reset" class="btn btn-danger" value="Reset">
              </div>
          </div>
      </form>
    </div>
    <footer>
    </footer>
  </body>
</html>
