<!doctype html>
<? $shanu = "shanu is great"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<button onclick="fun();">
    shanu
</button>

<script>
    function shanu() {
        confirm("shanu is great");

    }

    function fun() {
        var v = confirm("Do you really want to show?")
        if (v == true) {
            alert("Yes,Do you have any problem <?=$shanu?>");
            <? $shanu = "shanu is best";?>

        } else {
            alert("Nope!!!!!  What is your Problem <?=$shanu?>");
        }
    }
</script>

</body>
</html>