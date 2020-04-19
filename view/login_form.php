<html>
<head>
    <?php include 'view/assets/stylesheets.html'; ?>
</head>
<body>
    <div class="container">
        <?php
            if(isset($_GET['error'])){
                echo('---'.$_GET['error'].'---');
            }
        ?>
        <h1>LOGIN PAGE</h1>
        <a href="../login-mvc/index.php?controller=default&action=home">
            <button style="margin-bottom:10px;" class="btn btn-warning">back</button>
        </a>
        <form method="POST" action="index.php?controller=user&action=userLog">
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Login</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" placeholder="email@email.email or username" name="login">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
        </div>
            <button type="submit" class="btn btn-warning">SIGN IN</button>

        </form>
    </div>  



    
    <?php
        include 'assets/scripts.html';
    ?>
</body>
</html>