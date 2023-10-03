<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Tautan ke berkas CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tautan ke berkas JavaScript Bootstrap (dan Popper.js jika diperlukan) -->


    <title>Document</title>
</head>

<body>
    @if (Session::get('success'))
    <div class="alert alert-success  d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:">
            <use xlink:href="#exclamation-triangle-fill" />
        </svg>
        <strong>{{ Session('success') }}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    
    <h1>Role</h1>
    <a href="{{ route('createRole') }}" class="btn btn-primary">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">no</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($role as $key => $item)
                <tr>
                    <th scope="row">{{ $key + 1}}</th>
                    <td>{{ $item->name }}</td>
                    <td><a href="{{ route('edit', $item->id) }}" class="btn btn-primary">Edit</a></td>
                    <td><a href="#" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#editModal{{ $item->id }}">delete</a></td>
                </tr>
                <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1"
                    aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah anda yakin ingin menghapusnya?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <form action="{{ route('delete', $item->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </tbody>
    </table>

    <!-- Modal -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
