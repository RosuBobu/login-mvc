<html>
<head>
    <?php include 'assets/stylesheets.html'; ?>
</head>
<body>

    <?php
        if(isset($_GET['error'])){
            echo('<br>'.$_GET['error'].'<br>');
        }
    ?>

    <div class="container">
        <h1>REGISTER PAGE</h1>
        <a href="../login-mvc/index.php?controller=default&action=home">
            <button style="margin-bottom:10px;" class="btn btn-warning">back</button>
        </a>
        <form method="POST" action="index.php?controller=user&action=registerUser">
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" placeholder="Enter username" name="username" required>
        </div>
        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" placeholder="Enter email" name="mail" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control"placeholder="Password" name="password" required>
        </div>
        <button type="submit" class="btn btn-warning">Submit</button>
        </form>
    </div>
    <?php
        include 'assets/scripts.html';
    ?>
</body>
</html>