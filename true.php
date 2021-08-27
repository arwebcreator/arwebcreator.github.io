<?php
$servername =   'sql105.epizy.com';
$username   =   'epiz_29544655';
$password   =   'vNCk7p9pOb7';
$dbname     =   'epiz_29544655_arwebdevelopment';
$connection =   mysqli_connect($servername, $username, $password,"$dbname");
if(!$connection)
{
    die('Could not connect My Sql:' .mysql_error());
}

$select =   "SELECT * FROM `tbl_select`";
$result =   mysqli_query($connection,$select);

$message    =   '';
if(isset($_POST['submit']))
{
    $name       = $_POST['name'];
    $country    =   $_POST['country'];

    // insert data to database
    $insert = "INSERT INTO tbl_insert (name, class) VALUES ('$name', '$country')";
    if(mysqli_query($connection, $insert))
    {
        $message =  "Records added successfully";
    } 
    else
    {
        $message = "ERROR: Could not able to execute $insert. " . mysqli_error($connection);
    }
    // close connection
    mysqli_close($connection);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <div><img src="https://i.ytimg.com/vi/od05P_-LA2Q/maxresdefault.jpg" /></div>
<style>
    h1 {
        color: red;
    }
</style>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTAL PELAJAR KSAH</title>
    <link rel="stylesheet" href="stole.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<style>
    h3 {
        background-color: yellow;
        color: black;
        font-size: 25px;
    }
    h4 {
        color: black;
    }
</style>  
    <div class="container-fluid h-100 bg-light text-dark">
        <div class="row justify-content-center align-items-center">
            <h1>KOLEJ SULTAN ABDUL HAMID</h1>
        </div>
    <div class="container-fluid h-100 bg-light text-dark">
        <div class="row justify-content-center align-items-center">
            <h3>SCHOLAR  SPORTSMAN  GENTLEMAN</h3>
    <div class="container-fluid h-100 bg-light text-dark">
        <div class="row justify-content-center align-items-center">
            <h4>KEHADIRAN PELAJAR </h4>
        </div>    
        <hr/>
        <div class="row justify-content-center align-items-center h-100">
            <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <h5 class="text-success text-center" id="message"><?=$message;?><h5>
                <form action="index.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <select class="form-control" name="country">
                        <option>Please select class</option>
                        <?php foreach($result as $key => $value){ ?>
                            <option value="<?=$value['country'] ;?>"><?=$value['country'] ;?></option>
                        <?php } ?>
                    </select>
                </div>
              <div class="form-group">
                <div class="container">
                  <div class="row">
                    <div class="col"><button type="submit" name="submit" class="col-8 btn btn-primary btn-sm float-left">Submit</button></div>
                    <div class="col"><button type="submit" name="reset" class="col-8 btn btn-secondary btn-sm float-right">Reset</button></div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <script>
        $(document).ready(function()
        {
            setTimeout(function()
            {
                $('#message').hide();
            },3000);
        });
    </script>
</body>
</html>

