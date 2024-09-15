<?php
   $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"cms");

    if(isset($_POST['submit']))
        {
          $conferencename = $_POST['conferencename'];
          $venue = $_POST['venue'];
         $date = $_POST['date'];

           $sql = "insert into addconference(conferencename,venue,date)values(' $conferencename',' $venue',' $date')";

           if(mysqli_query($connection,$sql))
           {
                  echo '<script> location.replace("addedsuccessfully.php")</script>';  
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
  <title>Add New Conference</title>
  <style>
    body {
    font-family: Arial, sans-serif;
    background-image: url('./images/conference-speaker\ \(1\).jpg');
    background-repeat: no-repeat;
    background-size: cover;
}

.container {
    background:#fff;
    width:450px;
    padding:1.5rem;
    margin:50px auto;
    border-radius:10px;
    box-shadow:0 20px 35px rgba(0,0,1,0.9);
    text-align: center;
}

form {
  margin-top: 20px;
}

label {
  display: inline-block;
  width: 100px;
  text-align: right;
}

input[type="text"],
input[type="date"],
textarea {
  width: 300px;
  padding: 5px;
  margin-bottom: 10px;
}

.submit {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}


  </style>
</head>
<body>
  <div class="container">
    <h1>Add New Conference</h1>
    <form id="conferenceForm" action="addconference.php" method="post">
      <label for="conferenceName">Conference Name:</label>
      <input type="text" id="conferenceName" name="conferencename" required><br>

      <label for="venue">Venue:</label>
      <input type="text" id="venue" name="venue" required><br>

      <label for="date">Date:</label>
      <input type="date" id="date" name="date" required><br>

      <label for="description">Description:</label><br>
      <textarea id="description" name="description" rows="4" cols="50" required></textarea><br>

      <input type="submit" class="submit" name="submit" value="Register">
    </form>
  </div>
</body>
</html>
