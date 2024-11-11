<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Concluído</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            text-align: center;
        }

        h1 {
            color: #ad7e5f;
            margin-bottom: 20px;
        }

        .links-container {
            display: flex;
            gap: 15px; 
        }

        a {
            font-size: 18px;
            color: white;
            background-color: #ad7e5f;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            display: inline-block;
        }

        a:hover {
            background-color: #8e5d46;
        }
    </style>
</head>
<body>
    <h1>Cadastro realizado com sucesso!</h1>
    <div class="links-container">
        <a href="index.php">Voltar</a>
        <a href="listarLivros.php">Lista</a>
    </div>
</body>
</html>