<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Form Page
    </title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f8f9fa;
        }

        .form-title {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-title img {
            width: 50px;
            height: auto;
        }

        .form-title h1 {
            display: inline;
            font-family: 'Courier New', Courier, monospace;
            font-size: 24px;
            margin-left: 10px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            background-color: #f0f8ff;
        }

        .btn-submit {
            background-color: #ccff66;
            color: black;
            font-weight: bold;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container form-container">
        <div class="form-title">
            <img alt="Laptop icon" height="50"
                src="https://storage.googleapis.com/a1aa/image/6dY2GSFnSlajHVRU3JoU17kd835y2J6t1UNhoqjvwy7jnVfJA.jpg"
                width="50" />
            <h1>
                CO LAPTOP
            </h1>
        </div>
        <form>
            <div class="form-group">
                <label for="firstName">
                    Nama Depan
                    <span class="text-danger">
                        *
                    </span>
                </label>
                <input class="form-control" id="firstName" required="" type="text" />
            </div>
            <div class="form-group">
                <label for="lastName">
                    Nama Belakang
                    <span class="text-danger">
                        *
                    </span>
                </label>
                <input class="form-control" id="lastName" required="" type="text" />
            </div>
            <div class="form-group">
                <label for="email">
                    Email
                    <span class="text-danger">
                        *
                    </span>
                </label>
                <input class="form-control" id="email" required="" type="email" />
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="phone">
                        Nomor Telepon
                        <span class="text-danger">
                            *
                        </span>
                    </label>
                    <input class="form-control" id="phone" required="" type="text" />
                </div>
                <div class="col-md-6 form-group">
                    <label for="nip">
                        NIP/NIM
                        <span class="text-danger">
                            *
                        </span>
                    </label>
                    <input class="form-control" id="nip" required="" type="text" />
                </div>
            </div>
            <button class="btn btn-submit mt-3" type="submit">
                Lanjutkan
            </button>
        </form>
    </div>
</body>

</html>