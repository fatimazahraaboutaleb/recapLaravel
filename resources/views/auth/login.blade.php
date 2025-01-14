<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }
        .login-container h1.formtitle {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .login-container .custom-form {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 70px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .login-container .custom-form div {
            margin-bottom: 15px;
        }

        .login-container label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        .login-container input[type="email"],
        .login-container input[type="password"],
        .login-container input[type="checkbox"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .login-container input[type="checkbox"] {
            width: auto;
            margin-right: 5px;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-container button:hover {
            background-color: #0056b3;
        }

        .login-container a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .login-container a:hover {
            color: #0056b3;
        }

        @media (max-width: 480px) {
            .login-container .custom-form {
                padding: 15px;
            }

            .login-container h1.formtitle {
                font-size: 20px;
            }

            .login-container button {
                font-size: 14px;
            }
        }

    </style>
</head>
<body>
    
    <div class="login-container">
    <form action="{{ route('login') }}" method="POST" class="custom-form">
        <h1 class="formtitle">Login</h1>
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div>
            <label>
                <input type="checkbox" name="remember"> Remember Me
            </label>
        </div>

        <button type="submit">Login</button>
        <div>
            <a href="{{ route('register') }}">Create Account</a>
        </div>
    </form>

    </div>
    
</body>
</html>
