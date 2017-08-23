<?php /* Template Name: Subscribe */ ?>
<?php
$has_error = false;
$error_message = "";
if(isset($_POST['subscribe_form_submit'])){
	global $wpdb,$table_prefix;

	$rules = [
		'mobile' => 'required|string|regex:/09[]{11}/'
	];

	if(empty($_POST['mobile'])){
		$has_error = true;
		$error_message[] = "فیلد الزامی";
	}
	if(!$has_error){
		$insert_data = [
			'mobile' => sanitize_text_field($_POST['mobile']),
			'created_at' => date('Y-m-d H:i:s')
		];
		$table_name = $table_prefix.'subscribers';

		$wpdb->insert($table_name,$insert_data,[
			'%s','%s'
		]);
		$wpdb->insert_id;
	}

}
?>
<div class="wrapper">
	<?php if($has_error): ?>
		<p class="error"><?php echo $error_message; ?></p>
	<?php endif; ?>
	<form action="" method="post">
		<div class="form-row">
			<input type="text" name="mobile" placeholder="شماره همراه">
		</div>
		<div class="form-row">
			<input type="submit" name="subscribe_form_submit" value="ارسال ">
		</div>
	</form>
</div>