<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Static Navbar</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-dark" bg-primary style="background-color:rgb(142, 188, 202);">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="images/pasted image 0.jpg" height="50" alt="SPCA"></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link active">Home</a>
                    <a href="#" class="nav-item nav-link">Volunteer</a>
                    <a href="#" class="nav-item nav-link">Events</a>
                    <a href="#" class="nav-item nav-link" >Adopt Today</a>
                  	<a href="#" class="nav-item nav-link" >Contact Us</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<div class="container">
<div class="row">
    <div class="col-md-4">
        <div class="thumbnail">
            <a href="images/cat_and_man.png">
                <img src="images/cat_and_man.png" alt="cat_and_man" style="width: 100%">
            </a>
        </div>
    </div>
<div class="col-md-4">
    <div class="thumbnail">
        <a href="images/girls_and_puppy.png">
            <img src="images/girls_and_puppy.png" alt="girls_and_puppy" style="width: 100%">
        </a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="thumbnail">
            <a href="images/frenchy.png">
                <img src="images/frenchy.png" alt="French Bulldog" style="width: 100%">
            </a>
            </div>
        </div>
</div>
</div>
<div class="form-group">
    <label for="exampleFormControlTextarea3">Rounded corners</label>
    <textarea class="form-control" id="exampleFormControlTextarea2" rows="3">Locations/About</textarea>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <a href="images/girl_and_dog.png">
            <img src="images/girl_and_dog.png" alt="girl_and_dog" style="width: 100%">
        </a>
        </div>
    </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea3">Rounded corners</label>
    <textarea class="form-control" id="exampleFormControlTextarea2" rows="">Our Mission</textarea>
  </div>
  <div class="container">
    <div class="row">
    <div class="col-md-4">
        <div class="thumbnail">
            <a href="images/puppies.png">
                <img src="images/puppies.png" alt="Puppies" style="width: 100%">
            </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="images/cat.png">
                    <img src="images/cat.png" alt="Cat" style="width: 100%">
                </a>
                </div>
            </div>
    </div>
</div>
</body>
<hr>
    <footer>
        <div class="row">
            <div class="col-md-6">
                <p>Copyright &copy; 2021 SPCA</p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="#" class="text-dark">Terms of Use</a> 
                <span class="text-muted mx-2">|</span> 
                <a href="#" class="text-dark">Privacy Policy</a>
            </div>
        </div>
    </footer>
</html>