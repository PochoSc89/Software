<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <body>
      <header>
      <div>
        <nav>
          <a href="{{  route('Soporte') }} ">Asistencia</a>
          <a href="{{  route('Producto')}} ">Producto</a>
          <a href="{{  route('Informacion')}} ">Informes</a>
          <a href="{{  route('PanelControl')}}">Usuarios</a>
          <a href="{{  route('Dashboard') }}">Dashboard</a>
        </nav>
      </div>
      </header>
    </body>
    @yield('Dashboard')
    @yield('Soporte')
    @yield('PanelControl')
    @yield('Informacion')
    @yield('Producto')
    <footer>Copyright# </footer>
</html>
