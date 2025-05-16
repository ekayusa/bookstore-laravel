<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center">Daftar Buku</h1>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author->name }}</td>
                    <td>{{ $book->published_year }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
