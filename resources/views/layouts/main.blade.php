<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MidTermApp</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
          <button style="margin-right: 20px"  class="btn btn-outline-success" type="button" onClick="document.location.href='/companies'">Companies</button>
          <button class="btn btn-outline-success" type="button" onClick="document.location.href='/employees'">Employees</button>
        </form>
      </nav>

    <div class="container">
        @yield('content')
        @yield('content-employees')
        @yield('content-companies')

    </div>

    
</body>
</html>