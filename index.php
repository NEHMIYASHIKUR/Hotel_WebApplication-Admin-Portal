<html>
<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body style="background-image:url('cool2.jpg');">



<form action="process.php?action=login" method="post">
<div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <form action="" autocomplete="off">
                            <div class="form-group">
							    <label>USERNAME ;</label>
                                <input type="text" class="form-control" name="uname" required>
                            </div>
                            <div class="form-group">
							<label>PASSWORD ;</label>
                                <input type="password" class="form-control" name="pwd" required>
                            </div>
                            <button type="submit" id="sendlogin" class="btn btn-primary">log in</button>
							<p>don't have an account yet? please <a href="signin.php">click here</a> and register</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


