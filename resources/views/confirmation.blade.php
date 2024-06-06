<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Sekolah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form pendaftaran sekolah</h2>
        <p>terima kasih telah mendaftar di sekolah cendekia darussalam</p>
        <p>data telah berhasil di submit*</p>
        <p>tetap selalu cek email dan no whatsapp berkala,dikarenakan untuk pengunguman kelulusan akan di infokan melalui media tersebut*</p>
        <a href="{{ route('home') }}" class="btn">back to home</a>
    </div>
</body>
</html>