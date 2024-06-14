<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>.htaccess Testing</title>
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['id'])){
	$_SESSION['id']=session_id();
}
$session_id= $_SESSION['id'];
$date = date("Y~m");
$value= 5;
?>
<h4> welcome to home page</h4>
<a href="test~<?php echo $date; ?>">Test page</a><br>
<a href="process.php">Process page</a><br>
<a href="bala.php?val=<?php echo $value; ?>">About page</a>
</body>
 <script>
        document.addEventListener("DOMContentLoaded", function() {
            var sessionId = "<?php echo $session_id; ?>";
            var links = document.getElementsByTagName("a");
            for (var i = 0; i < links.length; i++) {
                var href = links[i].getAttribute("href");
                if (href.indexOf("?") > -1) {
                    links[i].setAttribute("href", href + "&session_id=" + sessionId);
                } else {
                    links[i].setAttribute("href", href + "?session_id=" + sessionId);
                }
            }
        });
    </script>
</html>
