<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <script src="jquery-3.1.0.min.js"></script>
    <script src="factorial.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="input-group">
                                <input type="number" class="form-control" id="input" name="input" placeholder="Enter number"  />
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-success find-factorial">Find Factorial</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <p>Result: <span class="output"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>