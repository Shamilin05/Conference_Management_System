<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conference Options</title>
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

.options {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.option {
  margin: 0 10px;
}

.option a {
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
}

.option a:hover {
  background-color: #0056b3;
}
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome User!!</h1>
    <div class="options">
      <div class="option">
        <a href="addconference.php">Add new Conference</a>
      </div>
      <div class="option">
        <a href="addedconference.php">Added Conference</a>
      </div>
    </div>
  </div>
</body>
</html>
