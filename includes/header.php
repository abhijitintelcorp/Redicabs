<head>

<<<<<<< HEAD
  <title>Taksi</title>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
=======
<header>
  <div class="default-header" style="padding:0px">
    <div class="container">
      <div class="row">
        <div class="col-sm-2 col-md-2">
          <div class="logo"> <a href="index.php"><img src="./assets/images/redicabs_logo.png" height="200" width="250" alt="image"/></a> </div>
        </div>
        <div class="col-sm-10 col-md-10" >
          <div class="header_info" style="padding: 50px;">
         <?php
         $sql = "SELECT EmailId,ContactNo from tblcontactusinfo";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
foreach ($results as $result) {
$email=$result->EmailId;
$contactno=$result->ContactNo;
}
?>   
>>>>>>> abd86ae45c06cdc4712b860731af8dbfa36f88c8

  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-select.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/color.css" rel="stylesheet">
  <link href="css/custom-responsive.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="css/component.css" rel="stylesheet">
  <link href="css/default.css" rel="stylesheet">
  <!-- font awesome this template -->
  <link href="fonts/css/font-awesome.css" rel="stylesheet">
  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
</head>