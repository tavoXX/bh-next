<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    width: 80%;
    margin: 0 auto;
    text-align: center;
}

.form-group {
    margin-bottom: 20px;
    text-align: left;
}

form {
    width: 80%;
    margin: 0 auto;
}

input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

header,
footer {
    background-color: #f0f0f0;
    padding: 20px 0;
    text-align: center;
}

header img,
footer img {
    max-width: 200px;
}

header{
    margin-top:50px;
}

#titulo {
    margin-top:20vh;
}
</style>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Cliente</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
  
    <div class="container">
        <h2 id="titulo">Login do Cliente</h2>
        <form action="#">
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <button type="submit">Entrar</button>
        </form>
    </div>
    
</body>
</html>