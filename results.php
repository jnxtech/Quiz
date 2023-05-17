<!DOCTYPE html>
<html>
<head>
    <title>Quiz Results</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700&display=swap" rel="stylesheet"> 
    <style>
        body {
            background: #0d0d0d;
            font-family: 'Orbitron', sans-serif;
        }
        .container {
            background: #1b1b1b;
            border-radius: 15px;
            padding: 30px;
            max-width: 800px;
            margin: 30px auto;
            box-shadow: 0px 0px 20px #ff4081;
            color: #f5f5f5;
        }
        h1 {
            color: #ff4081;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 500;
        }
        a {
            color: #ff4081;
            text-decoration: none;
        }
        a:hover {
            color: #f50057;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Quiz Results</h1>
        <p>You scored <?= $_GET['score'] ?> out of <?= $_GET['total'] ?></p>
        <a href="index.html" class="btn btn-primary">Take the quiz again</a>
    </div>
</body>
</html>
