<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .divider:after,
    .divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
    }
    .h-custom {
    height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
    .h-custom {
    height: 100%;
    }
}

</style>
</head>
<body>
    <section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form method="POST" action="{{ route('registerAuth') }}">
                @csrf
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="text" id="form3Example3" class="form-control form-control-lg"
                placeholder="Email" name="email" />
            </div>

            <!-- Nama input -->
            <div class="form-outline mb-3">
                <input type="text" id="form3Example4" class="form-control form-control-lg"
                placeholder="Nama" name="nama"/>
            </div>
             <!-- NomorTelpon input -->
             <div class="form-outline mb-4">
                <input type="number" id="form3Example3" class="form-control form-control-lg"
                placeholder="Nomor Telpon" name="noTelp" />
            </div>
            <!-- jenis kelamin -->
            <div class="form-outline mb-4">
                <select class="form-select form-select-xl" aria-label=".form-select-sm example" name="jenis_kelamin">
                    <option selected hidden>Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
                <input type="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="Password" name="password"/>
            </div>


            <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" class="btn btn-primary">Register</button>
                <p class="small fw-bold mt-2 pt-1 mb-0"><a href="#!"
                    class="link-danger">Login</a></p>
            </div>

            </form>
        </div>
        </div>
    </div>
    </section>
</body>
</html>
