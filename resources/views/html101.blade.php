<!-- file: resources/views/html101.blade.php-->

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nabla&display=swap" rel="stylesheet">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href="css/bootstrap.css">
    <style>
        body {
              font-family: "Nabla", system-ui;
        }
    </style>
</head>
<body>
    <div class = "container mt-4">
        <h1>Workshop #HTML - FORM </h1>
        <form action="">
            <div class="row mt-3">
                <div class="col-sm-12 col-md-4">
                    <label for="fname">ชื่อ</label>
                </div>
                <div class = "col">
                    <input id = "fanme" class ="form-control">
                </div>
            </div>
             <div class="row mt-3">
                <div class="col-sm-12 col-md-4">
                    <label for="lname">สกุล</label>
                </div>
                <div class = "col">
                    <input id = "lanme" class ="form-control">
                </div>
            </div>
        </form>
    </div>
</body>
</html>