<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="assets/user/images/LogoObes.png" rel="icon">
    <link href="assets/user/images/logoObes.png" rel="LogoObes">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #20b2aa;
        }
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
        .register-container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
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
        .register-title {
            text-align: center;
            margin-bottom: 2rem;
            color: #333;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
            font-weight: 500;
        }

        input, select {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        .gender-group {
            display: flex;
            gap: 5rem;
            margin-top: 0.8rem;
        }

        .gender-option {
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }
        .gender-option label {
        margin-bottom: 0.3rem;
        }
        .file-upload {
            border: 2px dashed #ddd;
            padding: 1rem;
            text-align: center;
            border-radius: 5px;
            margin-top: 0.5rem;
        }

        .file-upload input {
            display: none;
        }

        .file-upload label {
            color: #666;
            cursor: pointer;
        }

        .signup-btn {
            width: 100%;
            padding: 1rem;
            background-color: black;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 1rem;
            transition: background-color 0.3s;
        }

        .signup-btn:hover {
            background-color: #20b2aa;
        }

        .login-link {
            text-align: center;
            margin-top: 1.5rem;
        }

        .login-link a {
            color: #20b2aa;
            text-decoration: none;
            font-weight: 500;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="register-container">
    <a href="/home" class="close-icon-link"><span class="close-icon">&times;</span></a>
    <div class="logo-container">
        <!-- Ganti "logo.png" dengan path/URL logo Anda -->
        <img src="assets/user/images/LogoObes.png" alt="Website Logo" class="website-logo">
    </div>
    <h1 class="register-title">REGISTER</h1>
        <form id="registerForm">
            <!-- Jenis Kelamin -->
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="gender-group">
                    <div class="gender-option">
                        <input type="radio" id="male" name="gender" value="male" required>
                        <label for="male">Pria</label>
                    </div>
                    <div class="gender-option">
                        <input type="radio" id="female" name="gender" value="female" required>
                        <label for="female">Perempuan</label>
                    </div>
                </div>
            </div>

            <!-- Form Input -->
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" required>
            </div>

            <div class="form-group">
                <label for="birthdate">Tanggal Lahir</label>
                <input type="date" id="birthdate" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" required>
            </div>

            <!-- File Upload -->
            <div class="form-group">
                <label>Upload Foto (max 1MB)</label>
                <div class="file-upload">
                    <input type="file" id="photo" accept="image/*" required>
                    <label for="photo">Pilih file PNG, JPG, atau JPEG</label>
                    <span id="file-name"></span>
                </div>
            </div>

            <button type="submit" class="signup-btn">SIGN UP</button>
        </form>

        <div class="login-link">
            Already have an account? <a href="/login">Login</a>
        </div>
    </div>

    <script>
        // File upload handler
        document.getElementById('photo').addEventListener('change', function(e) {
            const fileName = document.getElementById('file-name');
            const file = e.target.files[0];
            
            if(file) {
                if(file.size > 1048576) { // 1MB
                    alert('File terlalu besar! Maksimal 1MB');
                    this.value = '';
                    fileName.textContent = '';
                } else {
                    fileName.textContent = file.name;
                }
            }
        });

        // Form validation
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Add your registration logic here
            alert('Registrasi berhasil!');
            this.reset();
            document.getElementById('file-name').textContent = '';
        });
    </script>
</body>
</html>