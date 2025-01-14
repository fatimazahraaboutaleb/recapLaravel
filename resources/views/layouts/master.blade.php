<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
    <!-- Add your CSS here -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }
        header {
            background-color: #f7f7b6;
            padding: 15px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        main {
            display: flex;
            padding: 20px;
            flex-grow: 1;
        }
        aside {
            width: 20%;
            padding-left: 15px;
        }
        .content {
            width: 75%;
            margin-right: 20px;
        }
        footer {
            background-color: #f1f1f1;
            padding: 10px;
            text-align: center;
            font-size: 14px;
        }
        
        .header-container .auth-buttons .btn {
            display: inline-block;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            margin-right: 10px;
            transition: background-color 0.3s ease;
            border: none;
        }

        .header-container .auth-buttons .btn:hover {
            background-color: #0056b3;
        }

        .header-container .auth-buttons .welcom {
            font-size: 16px;
            font-weight: bold;
            color: #333333;
            margin-right: 15px;
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
    <!-- Header Section -->
    <header>
        @yield('header')
    </header>

    <!-- Main Content -->
    <main>
        <div class="content">
            @yield('contenu')
        </div>
        <aside>
            @yield('aside')
        </aside>
    </main>

</body>
</html>
