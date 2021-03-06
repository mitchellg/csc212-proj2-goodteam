
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png" type="image/png">

    <title>UR Seminars</title>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="bootstrap-datepicker.js"></script>

    <link href="datepicker.css" rel="stylesheet">



    <!-- Bootstrap core CSS -->
    <!-- <link href="bootstrap.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="jumbotron-narrow.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="add.php">Add Seminar</a></li>
          <li><a href="map.php">Map</a></li>
        </ul>
        <h3 class="text-muted">Add Seminar</h3>
      </div>

      <form role="form" action="addSeminar.php">
        <div class="form-group">
          <label for="speaker1">Speaker (Last, First Title)</label>
          <input type="text" class="form-control" id="speaker1" placeholder="Example: Einstein, Albert PhD" name = "speaker">
        </div>
        <div class="form-group">
          <label for="department1">Department</label>
          <input type="text" class="form-control" id="department1" placeholder="Department" name = "department">
        </div>
        <div class="form-group">
          <label for="description1">Description</label>
          <textarea class="form-control" rows="2" name = "description" placeholder="What will the seminar be about?"></textarea>
        </div>
        <!-- <div class="form-group"> -->
          <div class="form-group">
          <label>Date</label>
            <input type="text" class="form-control" value="10/16/13" data-date-format="mm/dd/yy" id="dp2" name = "date">
            <script>
              $(document).ready(function(){
                $('#dp2').datepicker(); //initializes datepicker
              });
            </script>
          </div>
        <div class="form-group">
          <label for="time1">Time</label>
          <input type="text" class="form-control" id="time1" placeholder="Time" name = "time">
        </div>
        <div class="form-group">
          <label for="food1">Food</label>
          <input type="text" class="form-control" id="food1" placeholder="Will there be food? What kind?" name = "food">
        </div>
        <div class="form-group">
          <label for="location1">Location</label>
          <input type="text" class="form-control" id="location1" placeholder="Location" name = "location">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>

      <div class="footer">
        <p>&copy; UR Seminars</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

  </body>
</html>
