<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>

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

        .reset-container {
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
        .reset-title {
            text-align: center;
            color: #1a1a1a;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        input[type="email"] {
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
            border: 1px solid #20b2aa;
            border-radius: 5px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
            box-sizing: border-box;
        }

        .btn-secondary {
            width: 100%;
            padding: 0.8rem;
            background-color: transparent;
            color: black;
            border: 1px solid transparent;
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
            color: #008B8B;
        }
        /* Tambahkan di CSS global */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Tambahkan efek fokus */
        input[type="email"]:focus,
        .btn-primary:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.5);
        }
    </style>
</head>
<body>
    <div class="reset-container">
        <div class="logo-container">
            <!-- Ganti "logo.png" dengan path/URL logo Anda -->
            <img src="assets/user/images/LogoObes.png" alt="Website Logo" class="website-logo">
        </div>
        <h1 class="reset-title">Enter Your Email To Reset Password</h1>
        <form id="resetForm">
            <div class="form-group">
                <input type="email" placeholder="Email" required>
            </div>
            
            <button type="submit" class="btn-primary">Send Link Reset</button>
            <a href="/login" class="btn-secondary">Cancel</a>
        </form>
    </div>

    <script>
        document.getElementById('resetForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.querySelector('input[type="email"]').value;
            alert(`Reset link telah dikirim ke: ${email}`);
            this.reset();
        });
    </script>
</body>
</html>