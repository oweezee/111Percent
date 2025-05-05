<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home | 111%</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-dark">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">111%</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Directory</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Traffic</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5 text-center">
        <h1>Welcome to 111%</h1>
        <p class="lead">Bringing the people of Ngong Town together online.</p>
    </div>

    <div class="container my-5">
        <div class="row g-4">

            <!-- Business Directory -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Business Directory</h5>
                        <p class="card-text">Find and promote local businesses in Ngong Town.</p>
                        <a href="#" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>

            <!-- Traffic Updates -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Traffic Updates</h5>
                        <p class="card-text">Track matatus and traffic in real-time around Ngong.</p>
                        <a href="#" class="btn btn-primary">View Updates</a>
                    </div>
                </div>
            </div>

            <!-- Events & Activities -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Local Events</h5>
                        <p class="card-text">Stay up to date on what's happening in your area.</p>
                        <a href="#" class="btn btn-primary">See Events</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
