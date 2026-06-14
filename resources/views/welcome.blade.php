```blade
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD IFB</title>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Segoe UI',sans-serif;
        }

        body{
            background:linear-gradient(135deg,#0f172a,#1e3a8a);
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .card{
            background:white;
            width:850px;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 15px 40px rgba(0,0,0,.25);
            display:flex;
        }

        .left{
            flex:1;
            background:#1d4ed8;
            color:white;
            padding:50px;
            display:flex;
            flex-direction:column;
            justify-content:center;
        }

        .left h1{
            font-size:42px;
            margin-bottom:15px;
        }

        .left p{
            opacity:.9;
            line-height:1.8;
        }

        .right{
            flex:1;
            padding:50px;
            text-align:center;
        }

        .logo{
            font-size:70px;
            color:#2563eb;
            margin-bottom:20px;
        }

        h2{
            margin-bottom:10px;
        }

        .btn{
            display:block;
            width:100%;
            padding:15px;
            margin-top:15px;
            text-decoration:none;
            border-radius:10px;
            font-weight:600;
            transition:.3s;
        }

        .login{
            background:#2563eb;
            color:white;
        }

        .login:hover{
            background:#1d4ed8;
        }

        .register{
            background:#e5e7eb;
            color:#111827;
        }

        .register:hover{
            background:#d1d5db;
        }

    </style>

</head>
<body>

<div class="card">

    <div class="left">

        <h1>SIAKAD IFB</h1>

        <p>
            Sistem Informasi Akademik Mahasiswa.
            Kelola data mahasiswa, dosen,
            mata kuliah, jadwal kuliah,
            dan Kartu Rencana Studi (KRS)
            secara mudah dan terintegrasi.
        </p>

    </div>

    <div class="right">

        <div class="logo">
            <i class="fas fa-graduation-cap"></i>
        </div>

        <h2>Selamat Datang</h2>

        <p>
            Tugas Besar Pemrograman Web Lanjut
        </p>

        <a href="{{ route('login') }}" class="btn login">
            <i class="fas fa-sign-in-alt"></i>
            Login
        </a>

        <a href="{{ route('register') }}" class="btn register">
            <i class="fas fa-user-plus"></i>
            Register
        </a>

    </div>

</div>

</body>
</html>
```
