<html>
<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body style="background-image:url('background9.jpeg');">



<form action="process.php?action=signin" method="post">
<div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <form action="" autocomplete="off">
                            <div class="form-group">
							    <label>NAME ;</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
							<label>SURNAME ;</label>
                                <input type="text" class="form-control" name="sname" required>
                            </div>
							<div class="form-group">
							<label>EMAIL ;</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
							<div class="form-group">
							<label>USERNAME ;</label>
                                <input type="text" class="form-control" name="uname" required>
                            </div>
							<div class="form-group">
							<label>PASSWORD ;</label>
                                <input type="password" class="form-control" name="pwd" required>
                            </div>
                            <button type="submit" id="sendlogin" class="btn btn-primary">signin</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


