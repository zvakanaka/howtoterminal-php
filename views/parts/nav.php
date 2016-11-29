<nav>
      <a class="logo" href="/">howtoterminal</a>
<?php
	$action = strip_ext($_SERVER['PHP_SELF']);
	$menu = array("Photo" => "/php-class/dynamic/?action=home",
								"Senior Project" => "/bike-list",
								 "PHP Project" => "/photo-gal");

	if (isset($_SESSION["is_admin"])) {
		$menu["System"] = "/system.php";
	}
	if (isset($_SESSION["logged_in"])) {
		$menu["Log Out"] = "/php-class/dynamic/?action=logout";
	} else {
	}

	foreach(array_keys($menu) as $key){
		echo '<a class="nav-a';
		if ( $action == strip_extra_params(strip_ext($menu[$key])))
		 echo " on";
		echo '" href="'.$menu[$key].'" id="'.strip_ext($menu[$key]).'_tab">'.$key.'</a>';
	}
?>
</nav>
