<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>
 
	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	
	<br/>
	<br/>
 
	<table border="1" class="table table-dark table-borderless col-10 ml-auto mr-auto">
        <thead>
            <tr>
                <th>Category</th>
                <th>Soal</th>
                <th>jawaban_benar</th>
                <th>jawaban_lainya</th>
                <th>Token</th>
            </tr>
        </thead>
        <tbody class="table-secondary text-muted">
            @foreach($soal as $p)
            <tr>
                <td>{{ $p->category }}</td>
                <td>{{ $p->question }}</td>
                <td>{{ $p->correct_answer }}</td>
                <td>{{ $p->incorrect_answers }}</td>
                <td>{{ $p->token }}</td>
            </tr>
            @endforeach
        </tbody>
		
	</table>
 
 
</body>
</html>