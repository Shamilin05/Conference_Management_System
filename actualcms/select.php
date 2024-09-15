<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Select Role</title>
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
}

.options {
  display: flex;
  justify-content: center;
}

.options a {
  text-decoration: none;
  color: #333;
  margin: 0 20px;
  transition: transform 0.3s ease;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.options a:hover {
  transform: translateY(-5px);
}

.options img {
  width: 150px;
  height: 150px;
  border-radius: 50%;
}

.options p {
  margin-top: 10px;
  font-size: 1.2em;
}
</style>
</head>
<body>
  <div class="container">
    <h1>Select Your Role</h1>
    <div class="options">
      <a href="organiser.php">
        <img src="./images/organiser.jpg" alt="organiser">
        <p>Organiser</p>
      </a>
      <a href="participant.php">
        <img src="./images/participant.jpg" alt="participant">
        <p>Participant</p>
      </a>
    </div>
  </div>
</body>
</html>
