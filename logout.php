<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
session_unset();
session_destroy();
echo '<script type="text/javascript">
           window.location = "front_page.php"
      </script>'
?>

</body>
</html>
