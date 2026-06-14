<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD IFB</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Segoe UI',sans-serif;
        }

        body{
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:linear-gradient(135deg,#2563eb,#4f46e5);
        }

        .container{
            width:100%;
            max-width:420px;
            padding:20px;
        }

        .card{
            background:#fff;
            padding:40px;
            border-radius:20px;
            box-shadow:0 20px 40px rgba(0,0,0,.2);
        }

        .logo{
            text-align:center;
            font-size:50px;
            margin-bottom:10px;
        }

        h1{
            text-align:center;
            color:#111827;
            margin-bottom:8px;
            font-size:32px;
        }

        .subtitle{
            text-align:center;
            color:#6b7280;
            margin-bottom:30px;
        }

        .input-group{
            margin-bottom:18px;
        }

        .input-group label{
            display:block;
            margin-bottom:6px;
            color:#374151;
            font-weight:600;
        }

        .input-group input{
            width:100%;
            padding:13px;
            border:1px solid #d1d5db;
            border-radius:10px;
            outline:none;
            transition:.3s;
        }

        .input-group input:focus{
            border-color:#2563eb;
            box-shadow:0 0 0 3px rgba(37,99,235,.15);
        }

        .remember{
            display:flex;
            align-items:center;
            gap:8px;
            margin-bottom:20px;
            color:#4b5563;
        }

        .btn{
            width:100%;
            border:none;
            padding:14px;
            background:#2563eb;
            color:white;
            font-size:16px;
            font-weight:bold;
            border-radius:10px;
            cursor:pointer;
            transition:.3s;
        }

        .btn:hover{
            background:#1d4ed8;
        }

        .footer{
            text-align:center;
            margin-top:20px;
            color:#9ca3af;
            font-size:14px;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="card">

        <div class="logo">🎓</div>

        <h1>SIAKAD IFB</h1>

        <p class="subtitle">
            Sistem Informasi Akademik Mahasiswa
        </p>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="input-group">
                <label>Email</label>
                <input
                    type="email"
                    name="email"
                    placeholder="Masukkan email"
                    required
                    autofocus
                >
            </div>

            <div class="input-group">
                <label>Password</label>
                <input
                    type="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >
            </div>

            <div class="remember">
                <input type="checkbox" name="remember">
                <span>Ingat Saya</span>
            </div>

            <button type="submit" class="btn">
                Login
            </button>
        </form>

        <div class="footer">
            © 2026 SIAKAD IFB
        </div>

    </div>

</div>

</body>
</html>

