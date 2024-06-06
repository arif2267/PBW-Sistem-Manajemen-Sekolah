<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
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
    <h2>Edit Data Siswa</h2>
    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama Siswa:</label>
            <input type="text" id="name" name="name" value="{{ $student->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $student->email }}" required>
        </div>
        <div class="form-group">
            <label for="whatsapp">WhatsApp:</label>
            <input type="text" id="whatsapp" name="whatsapp" value="{{ $student->whatsapp }}" required>
        </div>
        <!-- File input fields, showing existing files if available -->
        <div class="form-group">
            <label for="formulir_pendaftaran">Formulir Pendaftaran:</label>
            @if ($student->formulir_pendaftaran)
                <p>Current File: <a href="{{ Storage::url($student->formulir_pendaftaran) }}" target="_blank">Lihat</a></p>
            @endif
            <input type="file" id="formulir_pendaftaran" name="formulir_pendaftaran">
        </div>
        <div class="form-group">
            <label for="fotocopy_nisn">Fotocopy NISN:</label>
            @if ($student->fotocopy_nisn)
                <p>Current File: <a href="{{ Storage::url($student->fotocopy_nisn) }}" target="_blank">Lihat</a></p>
            @endif
            <input type="file" id="fotocopy_nisn" name="fotocopy_nisn">
        </div>
        <div class="form-group">
            <label for="fotocopy_kk">Fotocopy KK:</label>
            @if ($student->fotocopy_kk)
                <p>Current File: <a href="{{ Storage::url($student->fotocopy_kk) }}" target="_blank">Lihat</a></p>
            @endif
            <input type="file" id="fotocopy_kk" name="fotocopy_kk">
        </div>
        <div class="form-group">
            <label for="fotocopy_akte_kelahiran">Fotocopy Akte Kelahiran:</label>
            @if ($student->fotocopy_akte_kelahiran)
                <p>Current File: <a href="{{ Storage::url($student->fotocopy_akte_kelahiran) }}" target="_blank">Lihat</a></p>
            @endif
            <input type="file" id="fotocopy_akte_kelahiran" name="fotocopy_akte_kelahiran">
        </div>
        <div class="form-group">
            <label for="fotocopy_ktp_ortu">Fotocopy KTP Orang Tua:</label>
            @if ($student->fotocopy_ktp_ortu)
                <p>Current File: <a href="{{ Storage::url($student->fotocopy_ktp_ortu) }}" target="_blank">Lihat</a></p>
            @endif
            <input type="file" id="fotocopy_ktp_ortu" name="fotocopy_ktp_ortu">
        </div>
        <div class="form-group">
            <label for="pas_foto">Pas Foto:</label>
            @if ($student->pas_foto)
                <p>Current File: <a href="{{ Storage::url($student->pas_foto) }}" target="_blank">Lihat</a></p>
            @endif
            <input type="file" id="pas_foto" name="pas_foto">
        </div>
        <div class="form-group">
            <label for="fotocopy_ijazah">Fotocopy Ijazah:</label>
            @if ($student->fotocopy_ijazah)
                <p>Current File: <a href="{{ Storage::url($student->fotocopy_ijazah) }}" target="_blank">Lihat</a></p>
            @endif
            <input type="file" id="fotocopy_ijazah" name="fotocopy_ijazah">
        </div>
        <div class="button">
            <a href="{{ route('students.index') }}" class="btn-back">Cancel</a>
            <button type="submit" class="btn">Update</button>
        </div>
    </form>
</div>
</body>
</html>
