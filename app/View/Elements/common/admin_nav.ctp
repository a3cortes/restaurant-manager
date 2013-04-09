		<?php if ($this->params['admin']) { ?>
		<div class="row">
			<div class="twelve columns">
				<ul class="nav-bar">
					<li class=""><a href="/admin/users/dashboard">Dashboard</a></li>
					<li class=""><a href="/admin/reservations">Reservations</a></li>
					<li class="has-flyout">
						<a href="#">Menus</a> <a href="#" class="flyout-toggle"><span> </span> </a>
							<ul class="flyout">
								<li><a href="/admin/menus">Online Menus</a></li>
								<li><a href="/admin/SetMenus">Set Menus</a></li>
								<li><a href="/admin/menus/settings">PDF Menus</a></li>
							</ul>
					</li>
					<li class=""><a href="/admin/Events">Events</a></li>
					<li class="has-flyout">
						<a href="#">Settings</a> <a href="#" class="flyout-toggle"><span> </span> </a>
							<ul class="flyout">
								<li><a href="/admin/settings">Venue Settings</a></li>
								</li>

							</ul>
					</li>
					<li class=""><a href="/admin/users">Users</a></li>
					<li class=""><a href="/users/logout">Logout</a></li>
				</ul>

			</div>
		</div>
		<?php } ?>