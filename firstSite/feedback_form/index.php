<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="max-width: 600px;">
        <div class="row">
            <div class="col">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                        <label class="btn btn-light" for="option1">😍</label>

                        <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                        <label class="btn btn-light" for="option2">😬</label>

                        <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off">
                        <label class="btn btn-light" for="option3">👿</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                overview
            </div>
        </div>
        <div class="row">
            <div class="col">
                recent feedback
            </div>
        </div>
    </div>
    </div>
</body>

</html>