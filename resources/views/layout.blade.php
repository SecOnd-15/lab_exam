<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character Dictionary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light">

  
<nav class="navbar navbar-expand-lg" style="background-color: #e0e0e0;">
    <div class="container">
        <a class="navbar-brand fs-2 fw-bold text-dark" href="{{ route('characters.index') }}">
            Character Dictionary
        </a>
    </div>
</nav>



    
    <div class="container py-5">

        {{-- Flash success message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Yield page content --}}
        @yield('content')

    </div>

</body>

</html>
