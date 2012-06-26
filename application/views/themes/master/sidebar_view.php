<?php if ($page != 'login_page'): ?>
<div id="left-area">
<?php echo anchor('logout', 'Logout')?>
<h1>Dashboard</h1>
	<ul>
		<li class="users"><?php echo anchor("users", "Users")?></li>
		<li class="clients"><?php echo anchor("clients", "Clients")?></li>
		<li class="referrers"><?php echo anchor("referrers", "Referrers")?></li>
		<li class="visits"><?php echo anchor("visits", "Visits")?></li>
		<li class="search"><?php echo anchor("search", "Search")?></li>
	</ul>
</div>
<?php endif ?>
