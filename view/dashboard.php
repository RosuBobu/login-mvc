<html>
<head>
    <?php
    include 'assets/stylesheets.html'
    ?>
</head>
<body>
    <div class="container">
        <h1>hi <?php echo($user);?> </h1>

        <a href="index.php?controller=user&action=logout">
            <button style="margin-bottom:10px;" class="btn btn-danger">LOGOUT</button>
        </a>
    </div>
<?php
    include 'assets/scripts.html'
?>
</body>
</html>