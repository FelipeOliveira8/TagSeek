<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\css/cadastroUser.css">
    <link rel="shortcut icon" href="../images/shorticon.png">
    <title>Login</title>
</head>
<body>
    <section class="cUsection">
        <div class="d-login1">
            <form class="f-cadUser" action="#">
                <div class="inputImage">
                    <input type="file">
                </div>
                <div div class="inputGroup">
                    <input autocomplete="off" required="" type="text" name="nome" id="cadUserNome">
                    <label for="name">Name</label>
                </div>
                <div div class="inputGroup">
                    <input autocomplete="off" required="" type="email" name="email" id="cadUserEmail">
                    <label for="name">Email</label>
                </div>
                <div div class="inputGroup">
                    <input autocomplete="off" required="" type="text" name="senha" id="cadUserSenha">
                    <label for="name">Senha</label>
                </div>
                <input type="submit" class="s-button">
                <!-- 
                    <input type="image">
                <input type="text" name="nome" id="cadUserNome">

                <input type="email" name="email" id="cadUserEmail">

                <input type="password" name="senha" id="cadUserSenha">

                <input type="submit">
                -->
            </form>
        </div>
        <div class="d-login2"></div>
    </section>
</body>