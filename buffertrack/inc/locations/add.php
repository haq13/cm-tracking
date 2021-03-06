<h1>Add New Location</h1>

<?php
  if(isset($_POST['Submit'])){
    $locationState = trimInput($_POST['locationState']);
    $locationName = trimInput($_POST['locationName']);
    $locationTypeID = trimInput($_POST['locationTypeID']);

    //add record into database
    $sql = "INSERT INTO location(locationState, locationName, locationTypeID) ";
    $sql .= "VALUES ('{$locationState}', '{$locationName}', '{$locationTypeID}')";
    validateForm($_POST, 'locations.php');
  }
?>

<form class="" action="" method="post">
  <div class="form-group row">
    <label class="col-sm-2 col-form-label" for="locationState">State</label>
    <div class="col-sm-10">
    <select class="form-control" name="locationState" id="">
      <option>Johor</option>
      <option>Melaka</option>
      <option>Negeri Sembilan</option>
    </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label" for="locationName">Location Name</label>
    <div class="col-sm-10">
    <input class="form-control" type="text" name="locationName" id="">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label" for="locationTypeID">Location Type</label>
    <div class="col-sm-10">
    <select class="form-control" name="locationTypeID" id="">
      <option value="1">School</option>
      <option value="2">Store</option>
    </select>
    </div>
  </div>
  <input class="btn btn-primary" type="submit" name="Submit" value="Submit">
</form>