<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->
    <div class="row profile">
		<div class="col-md-2">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="img/img-user.jpg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php 
  							echo $_SESSION['nombre']." ".$_SESSION['apellido'];
						?>
					</div>
					<div class="profile-usertitle-job">
						<?php
						    echo $_SESSION['usuario'];
						?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Perfil</button>
					<button type="button" class="btn btn-danger btn-sm" onclick="javascript: window.top.location.href='index.php';">Salir</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
<!--				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Administrar Favoritos </a>
						</li>
					</ul>
				</div>-->
				<!-- END MENU -->
			</div>
		</div>

	</div>
