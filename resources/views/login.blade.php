<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>{{ $title }}</title>
    
</head>
<body>
    <nav >
        <div class="nav-container">
            <a class="nav-text" href="/">Beranda</a>
            <a class="nav-text" href="#">About Us</a>
            <a class="nav-text" href="#">Jadwal</a>
            <a class="nav-text" href="#">Artikel</a>
            <a class="nav-text" href="/login">Login</a>
        </div>
    </nav>
    <div class="content">
        <h1>Halaman Login</h1>
    </div>

    <form action="action_page.php" method="post">
        <div class="login-container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
      
          {{-- <button type="submit">Login</button> --}}
          <a class="button" href="/dashboard">Login</a>
        </div>
      </form>
</body>
</html>