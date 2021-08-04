<?php
/**
 * layouts/admin_menu.php
 *
 * @package default
 */


?>
<ul>
  <li>
    <a href="../users/admin.php">
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
       <li><a href="../products/products.php">Admistrar Productos</a> </li>
       <li><a href="../products/product_search.php"> Buscar Producto</a> </li>
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
       <span>Sales</span>
      </a>
      <ul class="nav submenu">
         <li><a href="../sales/add_order_by_customer.php">Agregar Orden</a> </li>
         <li><a href="../sales/orders.php">Administrar Órdenes</a> </li>
         <li><a href="../sales/sales.php">Administar Ventas</a> </li>
         <li><a href="../sales/add_sale_by_sku.php">Agregar Oferta por SKU</a> </li>
     </ul>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-signal"></i>
       <span>Reportes</span>
      </a>
      <ul class="nav submenu">
        <li><a href="../reports/stock_report.php">Reporte de Stock</a></li>
        <li><a href="../reports/sales_report.php">Ventas por Fechas </a></li>
        <li><a href="../reports/monthly_sales.php">Ventas Mensuales</a></li>
        <li><a href="../reports/daily_sales.php">Ventas Diarias</a> </li>
      </ul>
  </li>

  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-cog"></i>
      <span>Administrar Usuarios</span>
    </a>
    <ul class="nav submenu">
      <li><a href="../users/group.php">Administrar Grupos</a> </li>
      <li><a href="../users/users.php">Administrar Usuarios</a> </li>
      <li><a href="../users/log.php">Registro del Sistema</a> </li>
   </ul>
  </li>

</ul>
