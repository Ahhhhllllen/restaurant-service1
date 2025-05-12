<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restaurant Service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f0f4ff, #d6eaff);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .button-group {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px 20px;
            max-width: 500px;
            width: 100%;
        }
        .btn-lg {
            width: 100%;
            margin-bottom: 15px;
            font-size: 1.25rem;
            border-radius: 10px;
            transition: transform 0.2s ease-in-out;
        }
        .btn-lg:hover {
            transform: scale(1.03);
        }
    </style>
</head>
<body>

<div class="button-group text-center">
    <h1 class="mb-4 fw-bold text-primary">Welcome to Our Restaurant</h1>

    @if(session('status'))
        <div class="alert alert-info">{{ session('status') }}</div>
    @endif

    <form action="{{ route('call.waiter') }}" method="POST">@csrf
        <button class="btn btn-success btn-lg">Call a Waiter</button>
    </form>

    <form action="{{ route('bill.out') }}" method="POST">@csrf
        <button class="btn btn-primary btn-lg">Bill Out</button>
    </form>

    <form action="{{ route('cancel') }}" method="POST">@csrf
        <button class="btn btn-danger btn-lg">Cancel</button>
    </form>

    <form action="{{ route('feedback') }}" method="POST">@csrf
        <button class="btn btn-warning btn-lg text-white">Feedback</button>
    </form>
    
    <a href="{{ url('/qrcodes') }}" class="btn btn-dark btn-lg mt-3">View QR Codes</a>
</div>

</body>
</html>
