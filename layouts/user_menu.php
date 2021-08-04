<?php
/**
 * layouts/user_menu.php
 *
 * @package default
 */


?>
<ul>
  <li>
    <a href="../users/home.php">
      <i class="glyphicon glyphicon-home"></i>
      <span>Inicio</span>
    </a>
  </li>

  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-shopping-cart"></i>
      <span>Productos</span>
    </a>
    <ul class="nav submenu">
       <li><a href="../products/media.php">Imagenes</a> </li>
       <li><a href="../products/categories.php">Categorias</a> </li>
       <li><a href="../products/products.php">Administrar Productos</a> </li>
       <li><a href="../products/product_search.php">Buscar Productos</a> </li>
       <li><a href="../products/stock.php">Administrar Stock</a> </li>
   </ul>
  </li>
  <li>
    <a href="../customers/customers.php" class="submenu-toggle">
      <i class="glyphicon glyphicon-user"></i>
      <span>Clientes</span>
    </a>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-piggy-bank"></i>
       <span>Ventas</span>
      </a>
      <ul class="nav submenu">
         <li><a href="../sales/add_order_by_customer.php">Agregar Orden</a> </li>
         <li><a href="../sales/orders.php">Administrar Órdenes</a> </li>
         <li><a href="../sales/sales.php">Administrar Ventas</a> </li>
         <li><a href="../sales/add_sale_by_sku.php">Agregar Oferta por SKU</a> </li>
     </ul>
  </li>
  <li>

</ul>
