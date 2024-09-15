<?php

$connection = mysqli_connect("localhost", "root", "");

$db = mysqli_select_db($connection, "cms");
$edit = $_GET['edit'];

$sql = "select * from addconference where id = '$edit'";

$run = mysqli_query($connection, $sql);

while ($row = mysqli_fetch_array($run)) {
    $uid = $row['id'];
    $conferencename = $row['conferencename'];
    $venue = $row['venue'];
    $date = $row['date'];
}

?>

<?php
$connection = mysqli_connect("localhost", "root", "");

$db = mysqli_select_db($connection, "cms");

if (isset($_POST['submit'])) {
    $edit = $_GET['edit'];
    $conferencename = $_POST['conferencename'];
    $venue = $_POST['venue'];
    $date = $_POST['date'];

    $sql = "update addconference set conferencename= '$conferencename',venue= '$venue',date='$date' where id =  '$edit'";

    if (mysqli_query($connection, $sql)) {
        echo '<script> location.replace("addedconference.php")</script>';
    } else {
        echo "Something Error" . $connection->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Conference</title>
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
    <h1>Edit Conference</h1>
    <form id="conferenceForm" action="" method="post">
      <label for="conferenceName">Conference Name:</label>
      <input type="text" id="conferenceName" name="conferencename" value="<?php echo $conferencename; ?>" required><br>

      <label for="venue">Venue:</label>
      <input type="text" id="venue" name="venue" value="<?php echo $venue; ?>" required><br>

      <label for="date">Date:</label>
      <input type="date" id="date" name="date" value="<?php echo $date; ?>" required><br>

      <input type="submit" class="submit" name="submit" value="Edit">
    </form>
  </div>
</body>
</html>
