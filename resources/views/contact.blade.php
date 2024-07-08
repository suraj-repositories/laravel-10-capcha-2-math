<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        
        <div class="row d-flex align-items-center justify-content-center mb-5">
            <div class="col-md-8 ">
                <div class="card">
                    <form action="{{ url('/contact') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h1>Create Contact</h1>
                        </div>
                        <div class="card-body mx-3">
                            <div class="mb-2">
                                <label for="name" class="mb-1">Name: </label>
                                <input type="text" name="name" class="form-control">
                                @if ($errors->has('name'))
                                    <small class="mt-1 text-danger">{{ $errors->first('name') }}</small>
                                @endif
                            </div>
                            <div class="mb-2">
                                <label for="email" class="mb-1">Email: </label>
                                <input type="email" name="email" class="form-control">
                                @if ($errors->has('email'))
                                    <small class="mt-1 text-danger">{{ $errors->first('email') }}</small>
                                @endif
                            </div>
                            <div class="mb-2">
                                <label for="message" class="mb-1">Message: </label>
                                <textarea name="message" class="form-control" cols="30" rows="3"></textarea>
                                @if ($errors->has('message'))
                                    <small class="mt-1 text-danger">{{ $errors->first('message') }}</small>
                                @endif
                            </div>
                            <div class="mb-2">
                                <label for="captcha" class="mb-1">Fill Captcha: </label>
                                <div class="d-flex">
                                    {!! captcha_img('math') !!}
                                    <div class="ms-2">
                                        <input type="text" name="captcha" class="form-control">
                                    @if ($errors->has('captcha'))
                                    <small class="mt-1 text-danger">{{ $errors->first('captcha') }}</small>
                                @endif
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
