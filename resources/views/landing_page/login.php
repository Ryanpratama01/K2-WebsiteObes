<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="assets/user/images/LogoObes.png" rel="icon">
    <link href="assets/user/images/logoObes.png" rel="LogoObes">

    <style>
        /* CSS */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #20b2aa;
        }

        .login-container {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            width: 350px;
            position: relative;
            padding-bottom: 20px;
        }
        /* Perbaikan styling close icon */
        .close-icon-link {
            position: absolute;
            right: 20px;
            top: 20px;
            text-decoration: none;
            z-index: 2;
        }

        .close-icon {
            font-size: 35px;
            color: #000000; /* Warna hitam */
            transition: opacity 0.3s;
            line-height: 1;
            cursor: pointer;
        }

        .close-icon:hover {
            opacity: 0.7;
            color: #000000; /* Pastikan tetap hitam saat hover */
        }
        /* Logo Styles */
        .logo-container {
            text-align: center;
            margin-bottom: 1rem;
        }

        .website-logo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: contain;
            margin-bottom: 0rem;
            padding: 1px;
            background-color: white;
        }
        .login-title {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #1a1a1a;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-input {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-top: 0.3rem;
            box-sizing: border-box;
        }

        .form-input:focus {
            outline: none;
            border-color: #1877f2;
        }

        .login-button {
            width: 100%;
            padding: 0.8rem;
            background-color: black;
            color: white;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 1rem;
        }

        .login-button:hover {
            background-color: #20b2aa;
        }
        
        .links-container {
            margin-top: 1.5rem;
            display: flex;
            justify-content: space-between;
            position: relative;
            z-index: 0;
        }

        .link {
            color: black;
            text-decoration: none;
            font-size: 14px;
        }

        .link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="login-container">
<a href="/home" class="close-icon-link"><span class="close-icon">&times;</span></a>
        <div class="logo-container">
            <!-- Ganti "logo.png" dengan path/URL logo Anda -->
            <img src="assets/user/images/LogoObes.png" alt="Website Logo" class="website-logo">
        </div>
        <h1 class="login-title">LOGIN</h1>
        <form id="loginForm">
            <div class="form-group">
                <input type="text" 
                       class="form-input" 
                       placeholder="Username"
                       required>
            </div>
            
            <div class="form-group">
                <input type="password" 
                       class="form-input" 
                       placeholder="Password"
                       required>
            </div>
            
            <button type="submit" class="login-button">LOGIN</button>
        </form>

        <div class="links-container">
            <a href="/register" class="link">Create Account</a>
            <a href="#" class="link">Forgot Password</a>
        </div>
    </div>

    <script>
        // JavaScript
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Dapatkan nilai input
            const username = document.querySelector('input[type="text"]').value;
            const password = document.querySelector('input[type="password"]').value;
            
            // Validasi login (contoh sederhana)
            console.log('Username:', username);
            console.log('Password:', password);
            
            // Reset form
            this.reset();
        });
    </script>
</body>
</html>