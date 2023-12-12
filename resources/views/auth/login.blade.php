<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Assets/css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login Admin</title>
</head>
<body>
  <div class="wrapper login">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">
                       
                <!-------------      image     ------------->
                <img src="{{ asset('Assets/icons/logo.png') }}" alt="">
            </div>

            <div class="col-md-6 right">
                <form class="input-box" action="/login" method="POST">
                    @csrf
                   <header>Login Admin</header>
                   <div class="input-field">
                        <input type="email" name="email" class="input" id="email" required="" autocomplete="off">
                        <label for="email">Email</label> 
                    </div> 
                   <div class="input-field">
                        <input type="password" name="password" class="input" id="pass" required="">
                        <label for="pass">Password</label>
                    </div> 
                   <div class="input-field">
                        <button type="submit" class="btn btn-primary">Login</button>
                   </div> 
                </form>  
            </div>
        </div>
    </div>
</div>
</body>
</html>

    <!-- <section style="margin-top : 100px">
        <div class="container py-5 col-xxl-6">
            <h3 class="fw-bold mb-3">Halaman Login Admin</h3>

            <form action="/login" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="">masukan Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="formgroup mb-3">
                    <label for="">Masukan Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </section> -->
