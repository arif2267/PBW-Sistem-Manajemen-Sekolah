<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftaran Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .btn-edit {
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            text-decoration: none;
        }
        .btn-edit:hover {
            background-color: #218838;
        }
        .btn-delete {
            background-color: #dc3545;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            text-decoration: none;
        }
        .btn-delete:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
<div class="container">
<a href="{{route('dashboard')}}" class="text-blue-500 hover:text-blue 950">Kembali Ke Dashboard</a>
    <h2>Data Pendaftaran Siswa</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>WhatsApp</th>
                <th>Formulir Pendaftaran</th>
                <th>Fotocopy NISN</th>
                <th>Fotocopy KK</th>
                <th>Fotocopy Akte Kelahiran</th>
                <th>Fotocopy KTP Orang Tua</th>
                <th>Pas Foto</th>
                <th>Fotocopy Ijazah</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->whatsapp }}</td>
                    <td><a href="{{ Storage::url($student->formulir_pendaftaran) }}" target="_blank">Lihat</a></td>
                    <td><a href="{{ Storage::url($student->fotocopy_nisn) }}" target="_blank">Lihat</a></td>
                    <td><a href="{{ Storage::url($student->fotocopy_kk) }}" target="_blank">Lihat</a></td>
                    <td><a href="{{ Storage::url($student->fotocopy_akte_kelahiran) }}" target="_blank">Lihat</a></td>
                    <td><a href="{{ Storage::url($student->fotocopy_ktp_ortu) }}" target="_blank">Lihat</a></td>
                    <td><a href="{{ Storage::url($student->pas_foto) }}" target="_blank">Lihat</a></td>
                    <td><a href="{{ Storage::url($student->fotocopy_ijazah) }}" target="_blank">Lihat</a></td>
                    <td>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn-edit">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
