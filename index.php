<?php
error_reporting(0);
$fbvi = @htmlentities($_POST['fbvi']);
$fbvdata = file_get_contents("https://fb-romaa.now.sh/?url=$fbvi");

$fbv = json_decode($fbvdata, true); 


?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Facebook Video Downloader</title>
  </head>
  <script language="javascript">
function pop_up(){
 window.open('https://www.yandana-sec.xyz', '', 'width=640, height=480, menubar=yes,location=yes,scrollbars=yes, resizeable=yes, status=yes, copyhistory=no,toolbar=no');
}
</script>
<body onLoad="pop_up();">
  <body class="container">
  <div class="container">
 <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <a class="btn btn-primary" href="https://github.com/yogiitzy" target="_blank">Github ME</a>
    </a>
  </div>
</nav>
  <h1 class="text-center">Facebook Video Downloader</a>
</div>
    <br>
    <form class="form-group" action="" method="post" enctype="multipart/form-data">
      <label for="ping"><strong>Masukan Link Video</strong></label>
      <input type="text" name="fbvi" value="" class="form-control" placeholder="Masukkan Link Video" id="ping" required oninvalid="this.setCustomValidity('BAKA!!.. Link Tidak Boleh Kosong')" oninput="setCustomValidity('')">
      <br>
      <input type="submit" name="scan" value="GasScan!" class="btn btn-primary">
    </form>

    <?php if (isset($_POST['fbvi'])) {
		echo "<div class='card border border-pimary'>";
		echo "<div class='card-body'>";
		  echo "<p class='card-text'>";
            echo "<h5 class='card-title'><b></bt>Status: </b>".$fbv['message']."</h5>";
            echo "<video width='320' height='240' controls src='".$fbv['url']."'></video><br>";
			 echo "<br><a href='".$fbv['url']."' target='_blank' class='btn btn-primary' >Download Video</a>";
echo           "<p></p>
		</div>
	  </div>";
	 }
     ?>
     
	 <br><br><br>
        
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
