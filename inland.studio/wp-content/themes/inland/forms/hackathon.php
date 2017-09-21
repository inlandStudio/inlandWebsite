<section class="light-grey-bg padding-top-40">
	<div class="wrapper">
		<div class="form-container margin-bottom-0 form-is-opened" id="form-container">
			<h5>
				<a href="#" id="form-visibility-toggle"><?php echo get_field('hackathon_form_heading'); ?></a>
				<span class="identity-element"></span>
			</h5>
			<div class="form">

				<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.validate.min.js"></script>
				<script type="text/javascript">
					jQuery.extend(jQuery.validator.messages, {
						required: "<?php echo get_field('hackathon_validation_required'); ?>",
						email: "<?php echo get_field('hackathon_validation_email'); ?>",
					});
				</script>

				<form action="<?php echo get_template_directory_uri(); ?>/assets/form/hackathon.php" method="post" id="hackathon-form">

					<?php if( get_field('hackathon_who_label') ): ?>
					<div class="textarea-container padding-top-60">
						<label for="hack-who" class="for-textarea"><?php echo get_field('hackathon_who_label'); ?></label>
						<textarea name="who" id="hack-who" maxlength="200" placeholder="<?php echo get_field('hackathon_who_placeholder'); ?>" rows="3"></textarea>
						<div class="counter-container"></div>
					</div>
					<?php endif; ?>

					<?php if( get_field('hackathon_how_label') ): ?>
					<div class="textarea-container">
						<label for="hack-how" class="for-textarea"><?php echo get_field('hackathon_how_label'); ?></label>
						<textarea name="how" id="hack-how" maxlength="700" placeholder="<?php echo get_field('hackathon_how_placeholder'); ?>" rows="8"></textarea>
						<div class="counter-container"></div>
					</div>
					<?php endif; ?>

					<h6>Your details</h6>

					<div class="sender-details">
						<div>
							<?php $occupation = get_field('hackathon_occupation_options');?>
							<select name="occupation">
								<?php if( in_array('occupation', $occupation) ): ?><option value="occupation" disabled selected>Occupation</option><?php endif; ?>
								<?php if( in_array('student', $occupation) ): ?><option value="Student">Student</option><?php endif; ?>
								<?php if( in_array('engineer', $occupation) ): ?><option value="Engineer">Engineer</option><?php endif; ?>
								<?php if( in_array('civil_servant', $occupation) ): ?><option value="Civil servant">Civil servant</option><?php endif; ?>
								<?php if( in_array('other', $occupation) ): ?><option value="Not specified">Other</option><?php endif; ?>
							</select>
						</div>

						<div>
							<?php if( get_field('hackathon_first_name_placeholder') ): ?>
							<div>
								<input type="text" name="firstname" maxlength="100" placeholder="<?php echo get_field('hackathon_first_name_placeholder'); ?>" />
							</div>
							<?php endif; ?>

							<?php if( get_field('hackathon_last_name_placeholder') ): ?>
							<div>
								<input type="text" name="lastname" maxlength="100" placeholder="<?php echo get_field('hackathon_last_name_placeholder'); ?>" />
							</div>
							<?php endif; ?>

							<?php if( get_field('hackathon_email_placeholder') ): ?>
							<div>
								<input type="email" name="email" maxlength="254" placeholder="<?php echo get_field('hackathon_email_placeholder'); ?>" />
							</div>
							<?php endif; ?>

							<?php if( get_field('hackathon_phone_placeholder') ): ?>
							<div>
								<input type="tel" name="phone" maxlength="20" placeholder="<?php echo get_field('hackathon_phone_placeholder'); ?>" />
							</div>
							<?php endif; ?>

							<?php if( get_field('hackathon_checkbox_label') ): ?>
							<div class="checkbox-container">
								<label for="hack-check">
									<input type="checkbox" value="1" id="hack-check" name="contactme" checked />
									<?php echo get_field('hackathon_checkbox_label'); ?></label>
							</div>
							<?php endif; ?>

						</div>
					</div>

					<div class="submit-button">
						<input type="submit" id="submit-button" class="button" name="submit" value="<?php echo get_field('hackathon_submit_button_text'); ?>" />
					</div>

				</form>

				<div class="success-message" id="form-is-sent">
					<p><?php echo get_field('hackathon_form_success_message'); ?></p>
				</div>

				<div class="fail-message" id="form-not-sent">
					<p><?php echo get_field('hackathon_form_fail_message'); ?></p>
				</div>

			</div>
		</div>
	</div>
</section>
