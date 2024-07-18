<?php
if (!isset($pageName)) {
  $pageName = "";
}
?>

<style>
  nav.navbar ul.navbar-nav a.nav-link.active {
    background-color:lightblue;
    color: white;
    font-weight: 900;
    border-radius: 6px;
  }
</style>
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="p_mainpage.php">後臺管理系統</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <a class="nav-link <?= $pageName == 'p_list' ? 'active' : '' ?>" href="p_mainpage.php">列表</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $pageName =='p_add' ? 'active':'' ?>" href="p_add_copy.php">新增商品</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>
</div>