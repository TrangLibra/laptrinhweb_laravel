 <head>
    <title>Create User</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<nav class="navbar navbar-expand-lg" style="background-color: #d9edf7;">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand fw-semibold" href="{{ route('users.index') }}">
            Laravel Training
        </a>

        <!-- Logout -->
        <div class="ms-auto">
            <a href="{{ route('signout') }}" class="text-dark text-decoration-none">
                Logout
            </a>
        </div>

    </div>
</nav>
 <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$messi->id}}</td>
                            <td>{{$messi->name}}</td>
                            <td>{{$messi->email}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>