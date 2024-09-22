<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #ffeef8, #ffb3d9);
            font-family: 'Helvetica', sans-serif;
            color: #d5006d;
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto;
            margin: 20px;
            flex-direction: column;
            text-align: center;
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            font-weight: 700;
        }
        h2 {
            font-size: 1.5em;
            margin-bottom: 20px;
        }
        form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 100%;
            max-width: 400px;
            margin: auto;
        }
        label {
            font-size: 1.2em;
            margin-bottom: 5px;
        }
        input {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #d5006d;
        }
        button {
            padding: 10px 20px;
            background-color: #ffb3d9;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: #4a0e29;
            font-size: 1em;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #ff80ab;
        }
    </style>
</head>
<body>
    <h1>Obrigada pelo seu cadastro!</h1>
    <h2>Gostaria de adicionar outras horas extras?</h2>
    <form action="exercicio11.html" method="POST">
        <label for="matricula">Matrícula do aluno:</label>
        <input type="text" name="matricula" required>

        <label for="nova_carga_horaria">Nova carga horária a ser somada:</label>
        <input type="number" name="nova_carga_horaria" required>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>