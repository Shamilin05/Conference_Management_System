<?php
   $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"cms");

    if(isset($_POST['submit']))
        {
          $name = $_POST['name'];
          $email = $_POST['email'];
         $phone = $_POST['phone'];

           $sql = "insert into register(name,email,phone)values(' $name',' $email',' $phone')";

           if(mysqli_query($connection,$sql))
           {
                  echo '<script> location.replace("registeredsuccessfully.php")</script>';  
           }
           else
           {
           echo "Some thing Error" . $connection->error;
           }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conference Registration</title>
  <style>
    body {
    font-family: Arial, sans-serif;
    background-image: url('./images/conference-speaker\ \(1\).jpg');
    background-repeat: no-repeat;
    background-size: cover;
}

.container {
  max-width: 600px;
  margin: 50px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
}

form {
  margin-top: 20px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="tel"],
select,
textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

textarea {
  resize: vertical;
}

.submit {
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s;
}

button[type="submit"]:hover {
  background-color: #0056b3;
}
</style>
</head>
<body>
  <div class="container">
    <h1>Conference Registration</h1>
    <form action="reg.php" method="POST">
      <div class="form-group">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone">
      </div>
      <div class="form-group">
        <label for="comments">Comments:</label>
        <textarea id="comments" name="comments" rows="4"></textarea>
      </div>
      <input type="submit" class="submit" name="submit" value="Register">
    </form>
  </div>
</body>
</html>
