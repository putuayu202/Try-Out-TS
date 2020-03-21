<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Malas Ngoding - Tutorial Laravel #18 : Membuat Form Validasi Pada Laravel</title>
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">www.malasngoding.com</h3>
                            <br/>
 
                            {{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
 
                            <br/>
                             <!-- form validasi -->
                            <form action="/inputsoal" method="post">
                                {{ csrf_field() }}
 
                                <div class="form-group">
                                    <label for="category">Nama</label>
                                    <input class="form-control" type="text" name="category" value="{{ old('category') }}">
                                </div>
                                <div class="form-group">
                                    <label for="question">Pekerjaan</label>
                                    <input class="form-control" type="text" name="question" value="{{ old('question') }}">
                                </div>
                                <div class="form-group">
                                    <label for="correct_answer">Jawaban benar</label>
                                    <input class="form-control" type="text" name="correct_answer" value="{{ old('correct_answer') }}">
                                </div>
                                <div class="form-group">
                                    <label for="incorrect_answers">Jawaban a</label>
                                    <input class="form-control" type="text" name="correct_answer" value="{{ old('correct_answer') }}">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Proses">
                                </div>
                            </form>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</body>
</html>