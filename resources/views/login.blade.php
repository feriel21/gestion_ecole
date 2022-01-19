<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script  src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" type="text/css" href={{ asset('css/style.css')}}>
</head>
<body>
    <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="login" method="POST">
                    <h1>Sign In as Professor</h1>
                    <span>using your university email </span>
                    @csrf
                    <input type="email" name="email" placeholder="Email"/>
                    <input type="password" name="password" placeholder="Password"/>
                    <button class="su" >Sign In</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="login" method="POST">
                    <h1>Sign In</h1>
                    <span>using your university email</span>
                    @csrf
                    <input type="email" name="email" placeholder="Email"/>
                    <input type="password" name="password" placeholder="Password"/>
                    <a href="#" target="_blank">I Forgot my Password</a>
                    <button class="si">Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>we don't just teach we inspire
                        </br>To share your files , courses with your students</p>
                        <button class="ghost" id="signInE">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>For Student</h1>
                        <p>Take your time and learn from anywhere</p>
                        <button class="ghost" id="signInP">Sign In</button>
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript" >
const signUpButton = document.getElementById('signInP');
const signInButton = document.getElementById('signInE');
const container = document.getElementById('container');
signUpButton.addEventListener('click', ()=> container.classList.add('right-panel-active')
);
signInButton.addEventListener('click', ()=> container.classList.remove('right-panel-active')
);
</script>
</body>
</html>