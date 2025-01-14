<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }

        h1.formtitle {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .custom-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            margin-top: 50px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .custom-form div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #218838;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        a:hover {
            color: #0056b3;
        }

        @media (max-width: 480px) {
            .custom-form {
                padding: 15px;
            }

            h1.formtitle {
                font-size: 20px;
            }

            button {
                font-size: 14px;
            }
        }

    </style>
</head>
<body>
    <div>
        <form action="{{ route('register') }}" method="POST" class="custom-form">
        
            <h1 class="formtitle">Create Account</h1>
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
    
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
    
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
    
            <div>
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
    
            <button type="submit">Create Account</button> <div>
                <a href="{{ route('login') }}"> déjà un compte ? Login</a>
            </div>
        </form>
    </div>

   
    
</body>
</html>