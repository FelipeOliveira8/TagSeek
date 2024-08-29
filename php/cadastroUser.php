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
            <a href="main.php" class="voltar">Voltar</a>
            <form class="f-cadUser" action="#">
            <div class='half-2'>
                    <div class='img-input'>
                        <label for='img' class='label'><img class="banana" id='img-thumbnail' title="Selecionar Imagem" src="../images/defaultUser."></label>
                        <input type='file' name='image' id='img' accept='.jpg, .jpeg' style="display: none;" onchange='changePlaceholder(this.id, "img-thumbnail")' required>
                    </div>
            </div>   
                <div div class="inputGroup">
                    <input autocomplete="off" required="" type="text" name="nome" placeholder="" id="cadUserNome">
                    <label for="name">Name</label>
                </div>
                <div div class="inputGroup">
                    <input autocomplete="off" required="" type="email" name="email" placeholder="" id="cadUserEmail">
                    <label for="name">Email</label>
                </div>
                <div div class="inputGroup">
                    <input autocomplete="off" required="" type="text" name="senha" placeholder="" id="cadUserSenha">
                    <label for="name">Senha</label>
                </div>
                <input type="submit" class="s-button" value="Cadastrar">
            </form>
        </div>
        <div class="d-login2">
            <div class="d-salas-main">
                <div class="d-salas-top">
                    <h1>Principais Salas</h1>
                </div>
                <div class="d-salas-search">
                    <input type="text" placeholder="Buscar...">
                </div>
                <div class="d-salas-scroll">
                   
                    <div>
                        <div class="d-sala">
                            <div class="checkbox-wrapper-12">
                            <div class="cbx">
                                <input type="checkbox" id="cbx-12">
                                <label for="cbx-12"></label>
                                <svg fill="none" viewBox="0 0 15 14" height="14" width="15">
                                <path d="M2 8.36364L6.23077 12L13 2"></path>
                                </svg>
                            </div>
                            
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                <filter id="goo-12">
                                    <feGaussianBlur result="blur" stdDeviation="4" in="SourceGraphic"></feGaussianBlur>
                                    <feColorMatrix result="goo-12" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 22 -7" mode="matrix" in="blur"></feColorMatrix>
                                    <feBlend in2="goo-12" in="SourceGraphic"></feBlend>
                                </filter>
                                </defs>
                            </svg>
                            </div>
                            <p>B-22</p>
                        </div>
                    </div>

                    
                    
                </div>
            </div>
        </div>
    </section>
    <script src="../js/imgPlaceHolderCadastroUser.js"></script>
</body>