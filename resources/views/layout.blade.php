<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <body>
      <header>
        <div>
      <nav>
          <a href="<?php echo route('Soporte') ?>">Asistencia</a>
          <a href="<?php echo route('Producto') ?>">Producto</a>
          <a href="<?php echo route('Informacion')?>">Informes</a>
          <a href="<?php echo route('PanelControl') ?>">Usuarios</a>
          <a href="<?php echo route('Dashboard') ?>">Dashboard</a>
        </nav>
      </DIV>
      </header>
    </body>
    @yield('Dashboard')
    @yield('Soporte')
    @yield('PanelControl')
    @yield('Informacion')
    @yield('Producto')
    <footer>Copyright </footer>
</html>
