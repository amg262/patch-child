<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 6/24/18
 * Time: 10:21 PM
 */

//$p = md5('password');

echo 'hi';


//if ( is_user_logged_in() ) {

	//header( 'Location: http://localhost/wordpress/amg.php' );

	//exit();
	?>


	<form action="amg.php" method="post" role="form">
		<legend>Form Title</legend>

		<div class="form-group">
			<label for=""></label>
			<input type="text" class="form-control" name="" id="" placeholder="Input...">
			<div class="form-group">
				<label for=""></label>
				<input type="password" class="form-control" name="password" id="password" placeholder="">
			</div>
		</div>


		<button type="submit" class="btn btn-primary">Submit</button>
	</form>


	<?php
//}
//exit();