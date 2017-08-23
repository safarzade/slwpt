<div class="wrap">
	<h1>تنظیمات قالب</h1>
	<style>
		.form-row{
			margin: 20px 0;
		}
	</style>
	<form action="" method="post">
		<div class="form-row">
			<label for="member_content_active">فعال بودن محتوای مخصوص اعضا :</label>
			<input type="checkbox" name="member_content_active" <?php checked(1,isset($options['member_content_active']) ? $options['member_content_active'] : 0); ?>>
		</div>
		<div class="form-row">
			<p>
				<label for="full_mode">تمام صفحه</label>
				<input type="radio" id="full_mode" name="display_mode" value="full">
			</p>

			<p>
				<label for="normal_mode">عادی</label>
				<input type="radio" id="normal_mode" name="display_mode" value="normal">
			</p>

			<p>
				<label for="boxed_mode">جعبه ای</label>
				<input type="radio" id="boxed_mode" name="display_mode" value="boxed">
			</p>

		</div>
		<div class="form-row">
			<?php wp_editor('','email_format'); ?>
		</div>
		<div class="form-row">
			<button type="submit" name="save_options" class="button button-primary">ذخیره اطلاعات</button>
		</div>
	</form>
</div>