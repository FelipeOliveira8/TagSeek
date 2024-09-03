<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" href="../images/shorticon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap" rel="stylesheet">
    <title>Página principal</title>
</head>
<body class="dark-mode">
    <section class="s-main">
        <nav class="p-info" onclick="toggleMenu2()">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg>
        <div class="sub-menu-wrap2" id="subMenu2">
            <button onclick="set_form(1, 'Número da Sala', 'form_label')">Cadastrar Sala</button>
            <button onclick="set_form(2, 'Novo tipo', 'form_label')">Cadastrar Item</button>
            <a href="cadastroUser.php"><button>Cadastrar Colaborador</button></a>
            <a href="#"><button>Ver Colaboradores</button></a>

        </div>
        </nav>
        <nav class="profile" onclick="toggleMenu(); toggle_transition()">
            <img src="../images/defaultUser.jpg" height="64px">
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu" >
                    <div class="user-info">
                    <div class="nome-perfil">
                    <h2>João Pedro</h2>
                    <p>Administrador</p>
                    </div>
                    <img src="../images/defaultUser.jpg">
                    </div>
                    <div class="profile-bottom">
                    <div class="exitSwitch">
                        <button class="Btn">
                            <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
                            <div class="text">Logout</div>
                        </button>
                        </div>
                        <div class="darkModeSwitch">
                            <label class="ui-switch">
                            <input type="checkbox" onchange="toggle_darkmode()">
                            <div class="slider">
                                <div class="circle"></div>
                            </div>
                            </label>
                        </div>
                        
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <section class="salas-main">
        <h2>SUAS SALAS</h2>
        <div class="suas-salas-d">
            <a class="sala sala-user" href="#">
                <h1>
                    B-22
                </h1>
            </a>
            <a class="sala sala-user" href="#">
                <h1>
                    B-22
                </h1>
            </a>
            
            <a class="sala sala-user" href="#">
                <h1>
                    B-22
                </h1>
            </a>
            
            <a class="sala sala-user" href="#">
                <h1>
                    B-22
                </h1>
            </a>
            
            <a class="sala sala-user" href="#">
                <h1>
                    B-22
                </h1>
            </a>
            
            <a class="sala sala-user" href="#">
                <h1>
                    B-22
                </h1>
            </a>
        </div>
        
        <hr>
        <h2>TODAS AS SALAS</h2>

            <form class="form">
                <label for="search">
                    <input class="input" type="text" required="" placeholder="Buscar..." id="search">
                    <div class="fancy-bg"></div>
                    <div class="search">
                        <svg viewBox="0 0 24 24" aria-hidden="true" class="r-14j79pv r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-4wgw6l r-f727ji r-bnwqim r-1plcrui r-lrvibr">
                            <g>
                                <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
                            </g>
                        </svg>
                    </div>
                   
                </label>
            </form>
        <div class="todas-salas-g">
            <a class="sala sala-geral" href="#">
                <h1>
                    B-22
                </h1>
                <?php 
                ?>
            </a>
            
            
            
        </div>
        
        <div class="center-absolute" id="popup-container">
            <div class="pop-up">
                <nav onclick="close_form()" class="close">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                </nav>
                <form class="pop-up-inline" action="utilities/cadastrar.php">
                <input type="hidden" name="request_id" id="request_id" value="-1">
                <div class="inputGroup">
                    <input autocomplete="off" type="text" name="nome" placeholder="" id="nome" required>
                    <label for="name" id="form_label">Nome do item</label>
                </div>
                <input type="submit" class="cad-button" value="Cadastrar">
                </form>
            </div>
        </div>
    </section>
</body>

<script src="../js/dark_mode.js"></script>
<script>
    let subMenu = document.getElementById("subMenu");

    function toggleMenu(){
        subMenu.classList.toggle("open-menu");
    }

    let subMenu2 = document.getElementById("subMenu2");

    function toggleMenu2(){
        subMenu2.classList.toggle("open-menu2");
        console.log("OK");
    }
        
    function set_form(request_id, form_tittle, label_id){

        setTimeout(() => {
                
            document.getElementById("popup-container").style.display = "flex";
                
            document.getElementById(label_id).textContent = form_tittle;
            document.getElementById("request_id").value = request_id;
            document.body.style.overflowY = "hidden";

        }, 210);
            
    }

    function close_form(){
        document.getElementById("popup-container").style.display = "none";
        document.body.style.overflowY = "scroll";
    }

    function toggle_transition(){
    Array.from(document.getElementsByTagName('a')).forEach(div =>{
        div.classList.toggle('noTransition');
    });
}
</script>
</html>