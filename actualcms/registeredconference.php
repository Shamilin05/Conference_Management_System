<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registeredconferences</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
         body{
            background-image: url('./images/conference-speaker\ \(1\).jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .container{
        background:#fff;
        }
    </style>  
</head>
<body>
        <div class="container">
                    <div class="card">
                    <div class="card-header">
                        <h1> Registered conferences </h1>
                    </div>
                    <div class="card-body">
                        <br/>
                        <br/>

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Conference_id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                $connection = mysqli_connect("localhost","root","");
                                $db = mysqli_select_db($connection,"cms");

                                $sql = "select * from register";
                                $run = mysqli_query($connection, $sql);
                                $id= 1;

                                while($row = mysqli_fetch_array($run))
                                {
                                    $uid = $row['id'];
                                    $name = $row['name'];
                                    $email = $row['email'];
                                    $phone = $row['phone'];
                                ?>

                                   <tr>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $email ?></td>
                                        <td><?php echo $phone ?></td>
                                        <td>
                                        </td>
                                   </tr>
                                    <?php $id++; } ?>
                        </tbody>
                        </table>
                    </div>
                    </div>
        </div>
</body>
</html>