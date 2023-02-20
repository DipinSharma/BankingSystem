<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Customer Details</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css
  ">
  <link rel="stylesheet" href="css/style.css">
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu&display=swap" rel="stylesheet">

  
<script src="https://kit.fontawesome.com/43124feaf5.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    require 'connection.php';

    $sql = "SELECT * FROM `customers`";

    $result = mysqli_query($conn,$sql);
    $num_of_entry = mysqli_num_rows($result);
?>

<section id="title">
    <div class="container-fluid">
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="index.php">Sparks Bank</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.linkedin.com/in/dipin-sharma-83108824a/">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Contact Us</a>
            </li>
        </ul>
    </div>
</nav>
<section>
    <h1>customer Details</h1>
    
    <table class="table table-hover">
        <thead class="container">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Current Balance</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php 
                  if($num_of_entry>0){
                    while($row = mysqli_fetch_assoc($result)){
                      echo "<tr>
                    <th scope='row'>".$row['Cust_ID']."</th>
                    <td>".$row['Name']."</td>
                    <td>".$row['Email']."</td>
                    <td>".$row['Amount']."</td>
                    <td><a href='transfer.php?name=".$row['Name']."'><button type='button' class='btn btn-success btn-sm'>Send</button></a></td>
                  </tr>";

                    }
                  }else{
                    echo "<script>alert('No data found in table!');</script>";
                  }
                ?>
        </tbody>
    </table>
</section>
<footer id="footer">
    <p>© 2023 Made By Dipin Sharma</p>
</footer>

</body>
</html>