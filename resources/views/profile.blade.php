<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #ffffff;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 300px;
            gap: 20px;
        }

        .foto-profil-box {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            border: 1.5px solid #333333;
            overflow: hidden;
            margin-bottom: 10px;
            background-color: #dcdcdc;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .foto-profil {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .info {
            width: 100%;
            background-color: #e2e8f0;
            color: #1e293b;
            text-align: center;
            padding: 12px 0;
            font-size: 18px;
            font-weight: 500;
            border-radius: 10px;
            border: 1px solid blue;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="foto-profil-box">
            <img src="{{ asset('storage/images/foto_profile.jpeg') }}" alt="Foto Profil" class="foto-profil">
        </div>

        <div class="info">
            {{ $nama ?: 'Nama' }}
        </div>

        <div class="info">
            {{ $kelas ?: 'Kelas' }}
        </div>

        <div class="info">
            {{ $npm ?: 'NPM' }}
        </div>
    </div>

</body>
</html>