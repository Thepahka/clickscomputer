<div class="EnterpriseProfile">
  <div class="Enterprise-img">
    <img class="img-enterprise" src="views/assets/image/default.jpg" alt="enterpriseP">
  </div>
  <div class="enterprise-name">
    <?php
   echo ($_SESSION["user"]["nombre"]);
  ?>
  </div>
  <ul class="gestion">
    <a href="MyDashboard"><li class="gest"><i class="fas fa-box gest-icon"></i>Gestionar productos</li></a>
    <a href=""><li class="gest"><i class="fas fa-address-book gest-icon"></i>Gestionar perfil</li></a>
    <a href="GestionCategorias"><li class="gest"><i class="fas fa-folder-open gest-icon"></i>Mis Categorias</li></a>
    <a href="GestionMarcas"><li class="gest"><i class="far fa-bookmark gest-icon"></i>Mis marcas</li></a>
  </ul>
</div>
