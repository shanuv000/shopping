<?php
$con = mysqli_connect('localhost', "root", "", "My_con");
//if(isset($_POST['name'])){
//echo $name = $_POST['name'];}
?>

<!--//    $query = mysqli_query($con, "insert into infor(name) value ('$name')");-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<title> Demo</title>

<? include 'extensions.php'; ?>
<div class="container">
    <h2 class="text-center">Insert</h2>
    <div class="form-group">

        <input type="text" class="form-control" id="name" onchange="fun()" name="name" placeholder="Enter text">
    </div>
   <center>
<!--        <button class="btn btn-danger" onclick="fun()">Press</button>-->
    </center>
    <div id="show"></div>

    <script>
        function fun() {
            var names = document.getElementById('name').value;
            console.log(names);
            $.ajax({

                type: 'post',
                url: 'ajax.php',
                data: {insert: names},
                success: function f(data) {
                    console.log(data);
                    show();
                }
            });


        }
show();
        function show() {

            $.ajax({
                type: 'post',
                url: 'ajax.php',
                data: {show: ""},
                success: function f(data) {
                    console.log(data);
                    $("#show").html(data);
                    document.getElementById('name').value="";

                }
            });
        }
    </script>
    <?
    //     $query = mysqli_query($con, "select * from infor");
    ?>

</div>
<script>
    src = "https://code.jquery.com/jquery-3.4.1.min.js"
    integrity = "sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin = "anonymous" >
</script>