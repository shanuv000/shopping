<?php include 'connection.php' ?>
<?php
if (isset($_POST['submit'])) {
    $state = $_POST['state'];
    $state = ucfirst($state);
    $query = mysqli_query($shanu->con, "insert into state(state) values ('$state')");

    if ($query ) {
        header("Location:state.php");

    }else if($state==""){
        echo "Field is empty";
        die($query);
    }
} ?>


    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>State Register Here</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
              crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
              integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
              crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous"></script>
        <style>
            .text-center {
                color: hotpink;
            }

            ;
        </style>
    </head>
    <body>

    <div class="container">
        <h2 class="text-center">Enter State</h2>

        <form method="post">
            <div class="form-group">
                <input type='state' name='state' placeholder="Register state" class="form-control"
                       pattern="[a-zA-Z ]{3,49}"
                       title="Character should not be more than 10 character and less than 3 character" autofocus>

            </div>
            <!--<input type="text" name="email" placeholder="email" class="form-control" pattern="[a-zA-Z]+[@]{1}[a-z*+_-]+[.]{1}[a-zA-Z]{3,80}" autofocus>-->
            <div class="form-group">
                <input type="submit" name="submit" value="Submit" class="btn btn-outline-success">
            </div>
            <button class="btn-dark ">shanu</button>
        </form>
    </div>
    </body>
    </html>

