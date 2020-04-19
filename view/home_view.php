<html>
<head>
    <?php
    include 'assets/stylesheets.html'
    ?>
</head>
<body>
    <div class="container">
        <h1>hi</h1>
        <a href="index.php?controller=user&action=registerForm">
            <button style="margin-bottom:10px;" class="btn btn-danger">REGISTER</button>
        </a>

        <a href="../login-mvc/?controller=user&action=loginPage">    
            <button style="margin-bottom:10px;" class="btn btn-danger">LOGIN</button>
        </a>
    </div>
<?php
    include 'assets/scripts.html'
?>
</body>
</html>