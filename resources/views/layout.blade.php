<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <nav>
          <a href="<?php echo route('Soporte') ?>">Asistencia</a><br>
          <a href="<?php echo route('Producto') ?>">Producto</a><br>
          <a href="<?php echo route('Informacion')?>">Informes</a><br>
          <a href="<?php echo route('PanelControl') ?>">Usuarios</a><br>
      </nav>
    @yield('Soporte')
    @yield('PanelControl')
    @yield('Informacion')
    @yield('Producto')
    <footer>Copyright </footer>
  </body>
</html>
