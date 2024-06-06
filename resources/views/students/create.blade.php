<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa</title>
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
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        .form-group input[type="text"], 
        .form-group input[type="email"], 
        .form-group input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .instruction {
            color: red;
            font-size: 14px;
            margin-bottom: 20px;
            text-align: center;
        }
        .alert {
            color: red;
            font-size: 14px;
            margin-bottom: 20px;
            text-align: center;
        }
        .btn {
            display: block;
            width: 60%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top :10px;
        }
        .btn-back {
            margin-top :10px;
            display: block;
            width: 30%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-right :10px;
        }

        .btn:hover {
            background-color: #0056b3;
        }
        .btn-back:hover {
            background-color: #0056b3;
        }

        .button {
            display :flex;
            justify-content : center;
            align-items : center;

        }
        
    </style>
</head>
<body>
<div class="container">
    <h2>Form Pendaftaran Sekolah</h2>
    <p class="instruction">*Masukkan data dengan benar karena setelah disubmit data Anda tidak bisa diubah lagi</p>
    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Masukan Nama Siswa/i:*</label>
            <input type="text" id="name" name="name" placeholder="Masukan Nama Siswa/i" required>
        </div>
        <div class="form-group">
            <label for="email">Masukan Email:*</label>
            <input type="email" id="email" name="email" placeholder="Masukan Email" required>
        </div>
        <div class="form-group">
            <label for="whatsapp">Masukan Nomor WhatsApp:*</label>
            <input type="text" id="whatsapp" name="whatsapp" placeholder="Masukan Nomor WhatsApp" required>
        </div>
        <div class="form-group">
            <label for="formulir_pendaftaran">Upload Formulir Pendaftaran, Template Download <a href="#">DISINI</a></label>
            <input type="file" id="formulir_pendaftaran" name="formulir_pendaftaran" required>
        </div>
        <div class="form-group">
            <label for="fotocopy_nisn">Fotocopy NISN:</label>
            <input type="file" id="fotocopy_nisn" name="fotocopy_nisn" required>
        </div>
        <div class="form-group">
            <label for="fotocopy_kk">Fotocopy KK 1 lembar:</label>
            <input type="file" id="fotocopy_kk" name="fotocopy_kk" required>
        </div>
        <div class="form-group">
            <label for="fotocopy_akte_kelahiran">Fotocopy Akte Kelahiran:</label>
            <input type="file" id="fotocopy_akte_kelahiran" name="fotocopy_akte_kelahiran" required>
        </div>
        <div class="form-group">
            <label for="fotocopy_ktp_ortu">Fotocopy KTP Orang Tua:</label>
            <input type="file" id="fotocopy_ktp_ortu" name="fotocopy_ktp_ortu" required>
        </div>
        <div class="form-group">
            <label for="pas_foto">Pas Foto:</label>
            <input type="file" id="pas_foto" name="pas_foto" required>
        </div>
        <div class="form-group">
            <label for="fotocopy_ijazah">Fotocopy Ijazah:</label>
            <input type="file" id="fotocopy_ijazah" name="fotocopy_ijazah" required>
        </div>
        <div class="button">
            <a href="{{ route('home') }}" class="btn-back">Kembali</a>
            <button type="submit" class="btn">Daftar</button>
        </div>
    </form>
</div>
</body>
</html>
     