<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" href="../images/shorticon.png">
    <title>Página principal</title>
</head>
<body>
    <section class="s-main">
        <nav class="p-info" onclick="toggleMenu2()">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg>
        <div class="sub-menu-wrap2" id="subMenu2">
            <button onclick="alert('sala')">Cadastrar Sala</button>
            <button onclick="alert('item')">Cadastrar Item</button>
            <a href="cadastroUser.php"><button>Cadastrar Colaborador</button></a>
            <a href="#"><button>Ver Colaboradores</button></a>
            <!-- 
                <div class="sub-menu2">
                <div class="user-info2">
                    <div class="nome-perfil2">
                        <h1>Banana</h1> 
                    </div>
                </div>
                </div>
            -->
        </div>
        </nav>
        <nav class="profile" onclick="toggleMenu()">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z"/></svg>
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu" >
                    <div class="user-info">
                    <div class="nome-perfil">
                    <h2>João Pedro</h2>
                    <p>Administrador</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px"  viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z"/></svg>
                    </div>
                    <a href="#" class="sub-menu-link">
                        <p>Sair</p>
                        <span></span>
                    </a>
                </div>
            </div>
        </nav>
    </section>
    <section class="salas-main">
        <h2>Suas salas</h2>
        <div class="suas-salas-d">
            <a class="sala-d" href="#">
                <h1>
                    B-22
                </h1>
            </a>
            <a class="sala-d" href="#">
                <h1>
                    B-22
                </h1>
            </a>
            
            <a class="sala-d" href="#">
                <h1>
                    B-22
                </h1>
            </a>
            
            <a class="sala-d" href="#">
                <h1>
                    B-22
                </h1>
            </a>
            
            <a class="sala-d" href="#">
                <h1>
                    B-22
                </h1>
            </a>
            
            <a class="sala-d" href="#">
                <h1>
                    B-22
                </h1>
            </a>
        </div>
        <hr>
        <h2>Todas as salas</h2>
        <input type="text" placeholder="Buscar...">
        <div class="todas-salas-g">
            <a class="sala-g" href="#">
                <h1>
                    B-22
                </h1>
                <?php 
                ?>
            </a>
            
            
            
        </div>
     
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
    </script>    
    </section>
</body>