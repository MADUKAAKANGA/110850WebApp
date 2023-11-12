<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - DBT</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <!-- top navigation starts here -->
    <?php require "includes/navigation.php"; ?>
    <!-- top navigation ends here -->
<div class="header">
    <h1>Talk to Us</h1>
</div>
<!-- the main content section starts here -->
<div class="row">
    <div class="content">
<h3></h3>

<form>
    First name:<br/>
    <input type="text" id="fname" name="fname"></input><br/>
    <br/> Last name:<br/>
    <input type="text" id="lname" name="lname"></input><br/>
    <br/>
    <label for="phonenumber">Phone Number:</label><br>
    <input type="number" id="phonenumber" name="phonenumber"><br><br/>
    <label for="Email"> Email:</label><br/>
    <input type="text" id="Email" name="Email"><br><br/>
    <label for="comments">Comments:</label>

    <textarea placeholder="Write here..."  id="comments" name="comments" rows="4" cols="50">    </textarea><br/><br/>
    <input type ="submit" value = Submit> <br/> 
</form>
    </div>
    <div class="sidebar">
<h3>Contact Details</h3>
<p>Contact BMP for all your gas supplies and refills<br/> We are open 24/7<br/>Email: <a href="url">informbmp@gmail.com</a><br>+254700770470</p>
    </div>
</div>
<!-- the main content section ends here -->
<div class="footer">
copyright &copy; DBIT 2023
</div>
</body>
</html>