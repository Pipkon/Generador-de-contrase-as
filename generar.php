<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Generador de contraseñas seguras</title>
    <style>
        html{
            background-color: #3e8e41;
        }

        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            margin-top: 50px;
        }

        #password {
            font-size: 24px;
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        #generate-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        #generate-button:hover {
            background-color: #3e8e41;
        }

        #length {
            margin-top: 20px;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 50px;
            text-align: center;
        }

        .container{
            text-align: center;
            align-items: center;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 0 30px;
            margin: 25%;
            padding: 2%;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Generador de contraseñas seguras</h1>
        <label for="length">Longitud:</label>
        <input type="number" id="length" name="length" value="12" min="4" max="128">
        <br>
        <button id="generate-button">Generar contraseña</button>
        <div id="password">Contrasenna</div>
    </div>
    <script>
        document.getElementById('generate-button').addEventListener('click', function() {
            var length = document.getElementById('length').value;
            var charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+{}[]|:;<>,.?/";
            var password = "";
            for (var i = 0, n = charset.length; i < length; ++i) {
                password += charset.charAt(Math.floor(Math.random() * n));
            }
            document.getElementById('password').innerHTML = password;
        });
    </script>
</body>

</html>