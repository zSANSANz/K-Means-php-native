<?php
	session_start();
	include "config/connect.php";
	if ($_SESSION['username'] != null && $_SESSION['password'] != null) {
		
?>
<html>
  <head>
     <title></title>
     <script type="text/javascript" src="js/pdfobject.js"></script>
     <script type="text/javascript">
      window.onload = function (){
		var file = '<?php echo "berkas/".$_GET['file']; ?>';
        var myPDF = new PDFObject({ url: file }).embed();
      };
    </script>
  </head>
 
  <body>
    <p>It appears you don't have Adobe Reader or PDF support in this web
	<?php echo $_GET['file']; ?>
    browser. <a href="" target='blank'>Click here to download the PDF</a></p>
  </body>
</html>

<?php 
		
	}

	else {
		header('location:index.php');
	}
	
 ?>