<section class="red-bg padding-top-40">
	<div class="wrapper">
		<div class="form-container margin-bottom-0" id="form-container">
			<h5>
				<a href="#" id="form-visibility-toggle"><?php echo get_field('share_idea_form_heading'); ?></a>
				<span class="identity-element"></span>
			</h5>
			<div class="form">

				<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.validate.min.js"></script>
				<script type="text/javascript">
					jQuery.extend(jQuery.validator.messages, {
						required: "<?php echo get_field('share_idea_validation_required'); ?>",
						email: "<?php echo get_field('share_idea_validation_email'); ?>",
					});
				</script>

				<form action="<?php echo get_template_directory_uri(); ?>/assets/form/share-your-idea.php" method="post" id="share-idea-form">

					<?php if( get_field('share_idea_why_label') ): ?>
					<div class="textarea-container padding-top-60">
						<label for="share-why" class="for-textarea"><?php echo get_field('share_idea_why_label'); ?></label>
						<textarea name="why" id="share-why" maxlength="300" placeholder="<?php echo get_field('share_idea_why_placeholder'); ?>" rows="4"></textarea>
						<div class="counter-container"></div>
					</div>
					<?php endif; ?>

					<?php if( get_field('share_idea_how_label') ): ?>
					<div class="textarea-container">
						<label for="share-how" class="for-textarea"><?php echo get_field('share_idea_how_label'); ?></label>
						<textarea name="how" id="share-how" maxlength="300" placeholder="<?php echo get_field('share_idea_how_placeholder'); ?>" rows="4"></textarea>
						<div class="counter-container"></div>
					</div>
					<?php endif; ?>

					<?php if( get_field('share_idea_what_label') ): ?>
					<div class="textarea-container">
						<label for="share-what" class="for-textarea"><?php echo get_field('share_idea_what_label'); ?></label>
						<textarea name="what" id="share-what" maxlength="600" placeholder="<?php echo get_field('share_idea_what_placeholder'); ?>" rows="8"></textarea>
						<div class="counter-container"></div>
					</div>
					<?php endif; ?>

					<?php if( get_field('share_idea_who_label') ): ?>
					<div class="textarea-container">
						<label for="share-who" class="for-textarea"><?php echo get_field('share_idea_who_label'); ?></label>
						<textarea name="who" id="share-who" maxlength="140" placeholder="<?php echo get_field('share_idea_who_placeholder'); ?>" rows="3"></textarea>
						<div class="counter-container"></div>
					</div>
					<?php endif; ?>

					<?php if( get_field('share_idea_vision_label') ): ?>
					<div class="textarea-container">
						<label for="share-vision" class="for-textarea"><?php echo get_field('share_idea_vision_label'); ?></label>
						<textarea name="vision" id="share-who" maxlength="600" placeholder="<?php echo get_field('share_idea_vision_placeholder'); ?>" rows="8"></textarea>
						<div class="counter-container"></div>
					</div>
					<?php endif; ?>

					<h6>Your details</h6>

					<div class="sender-details">
						<div>
							<?php $occupation = get_field('share_idea_occupation_options');?>
							<select name="occupation">
								<?php if( in_array('occupation', $occupation) ): ?><option value="occupation" disabled selected>Occupation</option><?php endif; ?>
								<?php if( in_array('student', $occupation) ): ?><option value="Student">Student</option><?php endif; ?>
								<?php if( in_array('migri_employee', $occupation) ): ?><option value="Employee at Migri">Employee at Migri</option><?php endif; ?>
								<?php if( in_array('engineer', $occupation) ): ?><option value="Engineer">Engineer</option><?php endif; ?>
								<?php if( in_array('civil_servant', $occupation) ): ?><option value="Civil servant">Civil servant</option><?php endif; ?>
								<?php if( in_array('other', $occupation) ): ?><option value="Not specified">Other</option><?php endif; ?>
							</select>
						</div>

						<div>
							<?php if( get_field('share_idea_first_name_placeholder') ): ?>
							<div>
								<input type="text" name="firstname" maxlength="100" placeholder="<?php echo get_field('share_idea_first_name_placeholder'); ?>" />
							</div>
							<?php endif; ?>

							<?php if( get_field('share_idea_last_name_placeholder') ): ?>
							<div>
								<input type="text" name="lastname" maxlength="100" placeholder="<?php echo get_field('share_idea_last_name_placeholder'); ?>" />
							</div>
							<?php endif; ?>

							<?php if( get_field('share_idea_email_placeholder') ): ?>
							<div>
								<input type="email" name="email" maxlength="254" placeholder="<?php echo get_field('share_idea_email_placeholder'); ?>" />
							</div>
							<?php endif; ?>

							<?php if( get_field('share_idea_phone_placeholder') ): ?>
							<div>
								<input type="tel" name="phone" maxlength="20" placeholder="<?php echo get_field('share_idea_phone_placeholder'); ?>" />
							</div>
							<?php endif; ?>

							<?php if( get_field('share_idea_checkbox_label') ): ?>
							<div class="checkbox-container">
								<label for="share-check">
									<input type="checkbox" value="1" id="share-check" name="contactme" checked />
									<?php echo get_field('share_idea_checkbox_label'); ?></label>
							</div>
							<?php endif; ?>

						</div>
					</div>

					<div class="submit-button">
						<input type="submit" id="submit-button" class="button" name="submit" value="<?php echo get_field('share_idea_submit_button_text'); ?>" />
					</div>

				</form>

				<div class="success-message" id="form-is-sent">
					<p><?php echo get_field('share_idea_form_success_message'); ?></p>
				</div>

				<div class="fail-message" id="form-not-sent">
					<p><?php echo get_field('share_idea_form_fail_message'); ?></p>
				</div>

			</div>
		</div>
	</div>
</section>
