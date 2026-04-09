 <head>
    <title>Create User</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
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