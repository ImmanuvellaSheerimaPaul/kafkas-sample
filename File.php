<!DOCTYPE html>
<html>
<head>
<title>Read A File</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>
<body>
<form action="Producer1.php" method="post" enctype="multipart/form-data">
  <br><br>
  <div class="row form-group">
    <div class="col-md-12 text-center">
        <h2>Choose File </h2><br>
          <div class="row form-group">
            <div class="col-md-12">
                <label for="file">Attachment</label>
                <input type="file"  name="file" id="file" class="form-control">
            </div>
        </div>
 <div class="row form-group">
   <div class="col-md-12 text-center">
      <button type="submit" name="submit" class="btn btn-primary" >Send</button>
    </div>
   </div>
 </div>
 </div>
</form>
</body>
</html>