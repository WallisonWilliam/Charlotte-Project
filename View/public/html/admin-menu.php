

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projeto Charlotte</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/style-admin.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Glory:wght@100&family=Great+Vibes&family=Raleway:wght@100;500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Glory:wght@300;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  
  <body>
    <header class="pageHeader">
      <div class ="admin-icon">
        <img src="../img/leuson.jpg" alt="leuson sensual" />
      </div>
        <nav class="menu">
            <ul class="menuItemsDiv">
                <li class="menuItems"><a href="#" class="color" id="menuText">Menu</a></li>
                <li class="menuItems"><a href="./coordinators-table.php" target="_self" class="color">Coordenadores</a></li>
                <li class="menuItems"><a href="#" class="color">Entregadores</a></li>
                <li class="menuItems"><a href="#" class="color">Sair</a></li>
            </ul>
        </nav>
    </header>
    <main class="parentAdminGod">
        <div class="parentAdminDiv">
          <div class="parentAdminWrapper"></div>
          <div class="admin-icon-profile">
            <div class="admin-profile-image"><img src="../img/leuson.jpg" alt="leuson" id="admin-profile-picture"></div>
          </div>
          <div class="admin-profile-name">
            <h3 id="admin-name">Leuson Mario</h3>
          </div>
          <div class="admin-profile-info">
            <div class="content-divider"></div>
            <div class="parent-admin-info">
              <div class="admin-info">
                <h3 class="admin-info-element">USER_ROLE</h3>
              </div>
              <div class="admin-info">
                <h3 class="admin-info-element">USER_NUMBER</h3>
              </div>
              <div class="admin-info">
                <h3 class="admin-info-element">USER_MAIL_ADDRESS</h3>
              </div>
            </div>
          </div>
          <div class="admin-edit-profile-button-div">
            <button class="admin-edit-profile" name="editProfileButton">
              Editar Perfil
            </button>
          </div>
        </div>  
    </main>
  </body>
</html>