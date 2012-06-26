<html>
<head>
<script type="text/javascript" src="<?php echo site_url(ASSETS_DIR . SCRIPTS_DIR . 'jquery/jquery-1.7.2.min.js'); ?>"></script>
<?php echo link_tag( MODAL_DIR . '/css/confirm.css' ); ?>
<?php echo link_tag( ASSETS_DIR . STYLESHEETS_DIR . 'default.css' ); ?>
</head>
<body>
	<h2>Users</h2>
	<hr>
	<h3><?php echo anchor("dashboard", "Back")?></h3>
	<h3><?php echo anchor("users/add", "Add User")?></h3>
	<h2>Active Users</h2>
	<table class="active_user">
	<tr>
		<th>Username</th>
		<th>Name</th>
		<th>Email</th>
		<th>Action</th>
	</tr>	
	<?php if(isset($records)): foreach($records as $row): ?>
	<tr>
		<td><?php echo $row->u_username; ?></td>
		<td><?php echo $row->u_fname; ?></td>
		<td><?php echo $row->u_email; ?></td>
		<td><?php echo anchor("users/edit/$row->u_id", "Edit")?> | <?php echo anchor("users/deactivate/$row->u_id", "Deactivate", 'class="confirm"'. "id='$row->u_id'")?></td>
		<input type="hidden" value="<?php echo $row->u_username ?>" id="<?php echo 'id'.$row->u_id ?>"/>
	</tr>
	<?php endforeach; ?>
	<?php else : ?>
	<h2>No Records</h2>
	<?php endif; ?>
	</table>
	
	
	<h2>Inactive Users</h2>
	<table class="inactive_user">
	<tr>
		<th>Username</th>
		<th>Name</th>
		<th>Email</th>
		<th>Action</th>
	</tr>	
	<?php if(isset($records2)): foreach($records2 as $row): ?>
	<tr>
		<td><?php echo $row->u_username; ?></td>
		<td><?php echo $row->u_fname; ?></td>
		<td><?php echo $row->u_email; ?></td>
		<td><?php echo anchor("users/activate/$row->u_id", "Activate")?></td>
	</tr>
	<?php endforeach; ?>
	<?php else : ?>
	<h2>No Records</h2>
	<?php endif; ?>
	</table>
	
	<div id='confirm'>
			<div class='header'><span>Confirm</span></div>
			<div class='message'></div>
			<div class='buttons'>
				<div class='no simplemodal-close'>No</div><div class='yes'>Yes</div>
			</div>
		</div>
		<script type="text/javascript" src="<?php echo site_url(MODAL_DIR . '/js/jquery.simplemodal.js'); ?>"></script>
		<script type='text/javascript'>
		jQuery(function ($) {
			$('a.confirm').click(function (e) {
				e.preventDefault();
				var currentId = $(this).attr('id');
				var Id = "id"+ String(currentId);
				var name = document.getElementById(Id).value;
				// example of calling the confirm function
				// you must use a callback function to perform the "yes" action
				confirm('Are you sure you want to deactivate "'+ name +'"?', function () {
					window.location.href = 'users/deactivate/' + currentId;
				});
			});
		});

		function confirm(message, callback) {
			$('#confirm').modal({
				closeHTML: "<a href='#' title='Close' class='modal-close'>x</a>",
				position: ["20%",],
				overlayId: 'confirm-overlay',
				containerId: 'confirm-container', 
				onShow: function (dialog) {
					var modal = this;

					$('.message', dialog.data[0]).append(message);

					// if the user clicks "yes"
					$('.yes', dialog.data[0]).click(function () {
						// call the callback
						if ($.isFunction(callback)) {
							callback.apply();
						}
						// close the dialog
						modal.close(); // or $.modal.close();
					});
				}
			});
		}
		</script>	
</body>
</html>