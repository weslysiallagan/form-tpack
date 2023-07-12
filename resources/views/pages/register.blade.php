<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <!--  jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <script>
        $(document).ready(function(){
            var date_input=$('input[name="tgllahir"]'); //nama data input "tgllaihr"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'mm/dd/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
                orientation:"bottom-right"
            })
        })
    </script>

    <title>Login</title>
</head>
<body>
    <div class="container py-5">
        <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>Registrasi</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/create" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" value="{{ Session::get('name') }}" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control">
            </div>
            <div class="jeniskelamin">
                <label for="jnskelamin">Jenis Kelamin</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jnskelamin" id="laki-laki" value="L">
                    <label class="form-check-label" for="L">L</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jnskelamin" id="perempuan" value="P">
                    <label class="form-check-label" for="P">P</label>
                  </div>
            </div>
            <div class="tgllahir">
                <label for="tgllahir">Tanggal Lahir</label>
                <div class="input-group date" id="datetimepicker">
                    <input type="text" id="tgllahir" class="form-control" name="tgllahir">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-4 mt-4 d-grid">
                <button name="submit" type="submit" class="btn btn-secondary">Register</button>
            </div>
            <br>
            <p class="mt-4">Sudah punya akun?</p>
            <div class="mb-4 d-grid">
                <a class="btn btn-primary btn-sm col-2" href="/" role="button">Login</a>
            </div>
        </form>
    </div> 
    </div>
</body>
</html>