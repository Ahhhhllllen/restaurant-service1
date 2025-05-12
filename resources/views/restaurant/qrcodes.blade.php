<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table QR Codes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h2 class="text-center mb-4">QR Codes per Table</h2>
    <div class="row">
        @foreach($qrCodes as $table => $url)
            <div class="col-md-4 text-center mb-4">
                <h5>Table {{ $table }}</h5>
                {!! QrCode::size(150)->generate($url) !!}
                <p class="small">{{ $url }}</p>
            </div>
        @endforeach
    </div>
    <div class="text-center mt-4">
        <a href="{{ url('/') }}" class="btn btn-secondary">Back to Home</a>
    </div>
</div>

</body>
</html>
