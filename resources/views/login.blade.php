<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="{{ asset('css/Registration.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DE+Grund:wght@100..400&display=swap" rel="stylesheet">
</head>
<body>
<div class="overlay"></div>
    <a href="/"><img src="{{ asset('assets/Home.png') }}" alt="Home" class="homeImg"> </a>

    <div class="main">
        <div class="window">
            <div class="containerh1">
                <img src="{{ asset('assets/TechTrendsLogo.png') }}" alt="TechTrends Logo"> 
                <h1>TechTrends</h1>
            </div>
            
            <div class="form-container">
                <form action="" method="POST">
                    <div class="input-box">
                        <img src="../Assets/Email.png" alt="">
                        <input type="text" id="email" name="email" placeholder="email">
                    </div>
                    <div class="input-box">
                        <img src="../Assets/Password.png" alt="">
                        <input type="password" id="password" name="password" placeholder="Senha">
                    </div>
                    <div class="divsubmit">
                        <a href="home">Submit</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>