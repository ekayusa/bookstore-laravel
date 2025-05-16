<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Penulis</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center">Daftar Penulis</h1>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nama</th>
                    <th>Biografi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($authors as $author)
                <tr>
                    <td>{{ $author->name }}</td>
                    <td>{{ is_array($author->bio) ? implode(', ', $author->bio) : $author->bio }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
