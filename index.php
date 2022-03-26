<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body style="background-color: rgb(49, 48, 48); color: white;">

    <div class="container" style="margin-top: 40px; ">

    <h1 style="text-align: center;">Password Generator using different hashing algorithms</h1>
      <br><br><br>

        <form action="index.php" method="post">
            <div class="form-group">
              <label for="name">Enter some string to get output in given hashing algorithms</label>
              <br><hr>
              <input type="text" class="form-control" name="message" aria-describedby="emailHelp" placeholder="Enter any string">
            </div>

            <br><br>
        
            <input type="submit" value="MD5" name="md5" class="btn btn-primary">

            <input type="submit" value="SHA256" name="sha256" class="btn btn-primary">

            <input type="submit" value="BASE64" name="base64" class="btn btn-primary">


          </form>
    </div>

    

<span class="result"></span>

<div class="container">
<?php 
if (isset($_POST['md5'])){
  $message = $_POST['message'];
  if(!empty($message)){
    echo "<h4 style='color:white; text-align:center'>" . 'Your md5 hash for given text ' . $message . " is: ". "</h4>";

    echo "<h4 style='color:red; text-align:center; background:white;'>" .hash('md5',$message); "</h4>";

  }
  else{
    echo "<h4 style='color:red; text-align:center;background:white;'>" . 'Please enter some string !' . "</h4>";
  }
}

if (isset($_POST['sha256'])){
  $message = $_POST['message'];
  if(!empty($message)){
    echo "<h4 style='color:white; text-align:center'>" . 'Your Sha256 hash for given text ' . $message . " is: ". "</h4>";

    echo "<h4 style='color:red; text-align:center;background:white;'>" .hash('sha256',$message); "</h4>";

  }
  else{
    echo "<h4 style='color:red; text-align:center;background:white;'>" . 'Please enter some string !' . "</h4>";
  }
}

if (isset($_POST['base64'])){
  $message = $_POST['message'];
  if(!empty($message)){
    echo "<h4 style='color:white; text-align:center'>" . 'Your Encoded value for given text ' . $message . " in base64 is: ". "</h4>";

    echo "<h4 style='color:red; text-align:center;background:white;'>" .base64_encode($message); "</h4>";

  }
  else{
    echo "<h4 style='color:red; text-align:center;background:white;'>" . 'Please enter some string !' . "</h4>";
  }
}

?>


</div>

<br><br>
<hr>
<div class="container">

<h2>What is Hashing ?</h2>


<p>Hashing is a process where a computer takes an input of any length and content (e.g. letters, numbers, and symbols) and uses a mathematical formula to chop it, mix it up, and produce an output of a specific length.</p>

<h3>What is MD5 ?</h3>

<p>MD5 is a hashing algorithm which is used to check the integrity of file but also here we can use this function to generate hash of texts, numbers and symbols.</p>

<h3>What is SHA256 ?</h3>

<p>SHA-256 stands for Secure Hash Algorithm 256-bit and it's used for cryptographic security. Cryptographic hash algorithms produce irreversible and unique hashes. </p>

<h3>What is base64 ?</h3>

<p>Base64 is nothing but a encoding technique which is used to encode chracters, number , text etc.</p>

<p></p>
</div>

<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">Tool Created By:
    <a href="https://github.com/ayush098-hub" target="_blank"> Ayush</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</body>
</html>






