<html>
    <head>
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <div class="loginbox">
            <!-- Remove This Before You Start -->
            <img src="user.png" class="user">
            <h2 class="text">Log In Here</h2>
            <form action="{{ route('perdah.index') }}" method="post">
                <p>Username</p>
                <input type="text" name="" placeholder="Enter Username" id="id_pd">
                <p>Password</p>
                <input type="password" name="" placeholder="Enter Password" id="password">
                <input type="submit" value="Sign In" ><a href="/">.</a>
            </form>
            <p id="lupa">Lupa Password ?</p>
            <p id="lupa">Hubungi kami</p>
            <p id="lupa">CP : 088888888888 </p>
        </div>
    </body>
</html>
