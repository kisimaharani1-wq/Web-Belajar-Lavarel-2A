<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <style>
        body { font-family: sans-serif; background-color: #fff0f5; }
        h2 { text-align: center; color: #d63384; }
        .form-login {
            border: 2px solid #f9a8d4;
            width: 300px;
            padding: 20px;
            border-radius: 30px;
            box-shadow: 5px 8px 3px 2px #ec4899;
            background: white;
        }
        .input {
            width: 80%;
            height: 40px;
            border-radius: 20px;
            font-size: 15px;
            padding: 2px 10px;
            border: 1px solid #f472b6;
        }
        .tombol {
            width: 50%;
            height: 50px;
            border-radius: 20px;
            background-color: #ec4899;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Login Users</h2>
    <center>
        <form method="POST" action="/login">
            @csrf
            <div class="form-login">
                @if (session('error'))
                    <p style="color: red;">{{ session('error') }}</p>
                @endif
                <p><input type="text" class="input" name="email" placeholder="Masukkan Email"></p>
                <p><input type="password" class="input" name="password" placeholder="Password Anda"></p>
                <p><button class="tombol" type="submit">LOGIN</button></p>
            </div>
        </form>
    </center>
</body>
</html>