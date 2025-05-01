<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>

    <link href="assets/user/images/LogoObes.png" rel="icon">
    <link href="assets/user/images/logoObes.png" rel="LogoObes">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f3f4f6;
        }

        .password-container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
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
        .password-title {
            text-align: center;
            color: #1a1a1a;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #4a4a4a;
        }

        input[type="password"] {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            box-sizing: border-box;
        }

        .btn-primary {
            width: 100%;
            padding: 0.8rem;
            background-color: #20b2aa;
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-secondary {
            width: 100%;
            padding: 0.8rem;
            background-color: transparent;
            color: black;
            border: none;
            border-radius: 5px;
            font-weight: 500;
            cursor: pointer;
            margin-top: 1rem;
            text-decoration: none;
            display: block;
            text-align: center;
            transition: color 0.3s;
        }

        .btn-primary:hover {
            background-color: #008B8B;
        }

        .btn-secondary:hover {
            color: #20b2aa;
        }
    </style>
</head>
<body>
    <div class="password-container">
        <div class="logo-container">
            <!-- Ganti "logo.png" dengan path/URL logo Anda -->
            <img src="assets/user/images/LogoObes.png" alt="Website Logo" class="website-logo">
        </div>
        <h1 class="password-title">Set New Password</h1>
        <form id="passwordForm">
            <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" id="password" required>
            </div>
            
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" required>
            </div>
            
            <button type="submit" class="btn-primary">Reset Password</button>
            <a href="/home" class="btn-secondary">Cancel</a>
        </form>
    </div>

    <script>
        document.getElementById('passwordForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm-password').value;
            
            if(password !== confirmPassword) {
                alert('Passwords do not match!');
                return;
            }
            
            // Jika password sama
            alert('Password successfully changed!');
            this.reset();
        });
    </script>
</body>
</html>