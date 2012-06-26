<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<?php echo link_tag( ASSETS_DIR . SCRIPTS_DIR . 'module-add-user-validate/form-validate.css' ); ?></head>

<title>Referral Views</title>
</head>
<body>
<h2>Referrers View</h2>
<hr>
<table>
<?php if(isset($refers)): foreach($refers as $row): ?>
	<tr>
		<td><?php echo $row->r_fname; ?></td>
		<td><?php echo $row->r_lname; ?></td>
		<td><?php echo $row->r_email; ?></td>
		<td><?php echo anchor("referrals/edit/$row->r_id", "Edit")?> | <?php echo anchor("referrals/deactivate/$row->r_id", "Deactivate")?></td>
	</tr>
	<?php endforeach; ?>
	<?php else : ?>
	<h2>No values found</h2>
	<?php endif; ?>
</table>

</body>
</html>
