<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>View Visits</title>
</head>
<body>
<div id="container">
<h1>Visits View</h1>
<hr>
<?php if (isset($data)) :?>
<?php echo $this->pagination->create_links() ?>
<?php else :?>
<h2>No values found</h2>
<?php endif;?>

</div>

</body>
</html>