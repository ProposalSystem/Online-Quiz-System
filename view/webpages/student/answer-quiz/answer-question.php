<?php
/**
 * Created using PhpStorm.
 * Project: OnlineQuizSystem
 * Author: seladanghijau
 * Date: 8/11/2016
 * Time: 12:21 AM
 */ ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Register</title>
</head>
<body>
 <div class="container-fluid">
     <div class="row">
       <div class="col-md-2"></div>
       <div class="col-md-8">
           <form action="" method="post">
               <h5>Time: </h5>
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-md-1">
                           <div class="checkbox">
                               <label><input type="checkbox" value=""></label>
                           </div>
                       </div>
                       <div class="col-md-11">
                           <h4>Question Description</h4>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-5">
                           <div class="radio">
                               <label><input type="radio" name="optradio">A</label>
                           </div>
                           <div class="radio">
                               <label><input type="radio" name="optradio">B</label>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="radio">
                               <label><input type="radio" name="optradio">C</label>
                           </div>
                           <div class="radio">
                               <label><input type="radio" name="optradio">D</label>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-md-1">
                           <div class="checkbox">
                               <label><input type="checkbox" value=""></label>
                           </div>
                       </div>
                       <div class="col-md-11">
                           <h4>Question Description</h4>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-5">
                           <div class="radio">
                               <label><input type="radio" name="optradio">A</label>
                           </div>
                           <div class="radio">
                               <label><input type="radio" name="optradio">B</label>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="radio">
                               <label><input type="radio" name="optradio">C</label>
                           </div>
                           <div class="radio">
                               <label><input type="radio" name="optradio">D</label>
                           </div>
                       </div>
                   </div>
               </div>
               <div>
                   <input type="submit" name="submit-question" value="Submit Answer" class="btn btn-success"/>
               </div>
           </form>
       </div>
         <div class="col-md-2"></div>
     </div>
 </div>
</body>
</html>