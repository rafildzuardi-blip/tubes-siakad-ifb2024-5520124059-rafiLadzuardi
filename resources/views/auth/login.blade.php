<!DOCTYPE html>
<html>
<head>
    <title>SIAKAD IFB</title>
    <style>
        body{
            margin:0;
            font-family:Arial,sans-serif;
            background:#2563eb;
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
        }

        .card{
            width:400px;
            background:white;
            padding:30px;
            border-radius:15px;
            box-shadow:0 10px 30px rgba(0,0,0,.2);
        }

        h1{
            text-align:center;
            margin-bottom:10px;
        }

        p{
            text-align:center;
            color:#666;
            margin-bottom:20px;
        }

        input{
            width:100%;
            padding:12px;
            margin-bottom:15px;
            border:1px solid #ccc;
            border-radius:8px;
            box-sizing:border-box;
        }

        button{
            width:100%;
            padding:12px;
            background:#2563eb;
            color:white;
            border:none;
            border-radius:8px;
            cursor:pointer;
        }

        button:hover{
            background:#1d4ed8;
        }
    </style>
</head>
<body>

<div class="card">

    <h1>SIAKAD IFB</h1>

    <p>Sistem Informasi Akademik Mahasiswa</p>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <input
            type="email"
            name="email"
            placeholder="Email"
            required
        >

        <input
            type="password"
            name="password"
            placeholder="Password"
            required
        >

        <button type="submit">
            Login
        </button>
    </form>

</div>

</body>
</html>