<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='../public/view/social/style.css'>
    <link rel="stylesheet" href='style.css'>
    <title>HW Hillel MVC</title>
</head>
<body>


<div class="container">
<h1 class="mainHeader">Model View Controller</h1>
<p class="text">homework</p>


<h2 class="secondaryHeader">Contact us form</h2>
<form class="form-data" action="" method="POST">

<div class="form-block">
<h4 class="form-header">Your full name*</h4>
  <input class ="form-input" type="text" name="Fname" placeholder="First name" required="required">
  <input class ="form-input" type="text" name="Lname" placeholder="Last name" required="required">
</div>

<div class="form-block">
<h4 class="form-header">Contact info*</h4>
  <input class ="form-input" type="email" name="email" placeholder="example-mail@gmail.com" required="required">
  <input class ="form-input" type="tel" name="phone" placeholder="+3805077712217" required="required">
</div>

<div class="form-block">

<h4 class="form-header">More data</h4>

<label class ="form-label" for="сourse">Choose what you want to study*</label>
<select name="course" id="course" required>
    <option value="">Please choose an option</option>
    <option value="html">HTML&CSS</option>
    <option value="js">Javascript</option>
    <option value="php">PHP</option>
    </select>

    <label  class ="form-label" for="know_about">How did you hear about us</label>
    <input type="radio" id="social" name="know_about" value="social">
    <label for="social">Social Media</label><br>
    <input type="radio" id="friends" name="know_about" value="friends">
    <label for="friends">Friends</label><br>
    <input  type="radio" id="other" name="know_about" value="other">
    <label for="other">Other</label>
    <p class="required-fields">* required fields</p>
    </div>
    <div class="form-block form-block--news" >

    <input type="checkbox" id="news" name="news" value="checked">
    <label class="input-newsletters" for="news">Update me on deals and special offers via email</label>
    </div>

<button class="button" type="submit">Send</button>
</form> 