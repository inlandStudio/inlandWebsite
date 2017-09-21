<?
// sending message to studio
function send_mail_to_studio($to, $subject_company, $html, $email)
{
	$encoding   = 'utf-8';
	$headers    = "Content-type: text/html; charset=$encoding \r\n";
	$headers   .= "From: $email\n\n";
	$multipart .= "$html\n\n";

	if(!mail($to, $subject_company, $multipart, $headers))
	{
		echo "Error occured. Message to Inland not sent.";
		exit();
	}
	else
	{
		print "<html><head>\n";
		print "<meta HTTP-EQUIV='Refresh' CONTENT='0; URL=/'>\n";
		print "</head></html>\n";
	}
};

// sending message to customer
function send_mail_to_customer($to, $subject_customer, $html, $email)
{
	$encoding   = 'utf-8';
	$headers    = "Content-type: text/html; charset=$encoding \r\n";
	$headers   .= "From: Inland Studio <info@inland.studio>\n\n";
	$multipart .= "$html\n\n";
	if(!mail($to, $subject_customer, $multipart, $headers))
	{
		echo "Error occured. Message to customer not sent.";
		exit();
	}
	else
	{
		print "<html><head>\n";
		print "<meta HTTP-EQUIV='Refresh' CONTENT='0; URL=/#contacts'>\n";
		print "</head></html>\n";
	}
};

// variables
$why = htmlspecialchars(stripslashes($_POST['why']));
$how = htmlspecialchars(stripslashes($_POST['how']));
$what = htmlspecialchars(stripslashes($_POST['what']));
$who = htmlspecialchars(stripslashes($_POST['who']));
$vision = htmlspecialchars(stripslashes($_POST['vision']));
$occupation = htmlspecialchars(stripslashes($_POST['occupation']));
$firstname = htmlspecialchars(stripslashes($_POST['firstname']));
$lastname = htmlspecialchars(stripslashes($_POST['lastname']));
$email = $_POST['email'];
$phone = htmlspecialchars(stripslashes($_POST['phone']));

$contactme = htmlspecialchars(stripslashes($_POST['contactme']));
if($contactme == 1) {
	$contactme = 'would';
}
else if($contactme != 1) {
	$contactme = 'wouldn\'t';
};

$studio_email = "inland.studio.inbox@gmail.com";
$customer_email = $email;
$subject = "New idea for inland";
$subject_customer = "Thank you for your idea!";

// message to team
$message_team = "
	<table cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%; margin: 0; padding: 0; background: #F5F5F5;\">
		<tr>
			<td colspan=\"3\" style=\"padding: 30px 0; text-align: center;\">
				<a href=\"http://www.inland.studio\">
					<img src=\"http://inland.studio/wp-content/themes/inland/assets/img/logo.png\" style=\"width: 125px;\" alt=\"\">
				</a>
			</td>
		</tr>
		<tr>
			<td style=\"width: 20%;\"></td>
			<td style=\"width: 60%; text-align: left; padding: 30px 0;\">
				<p style=\"font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #1733FB; line-height: 24px;\">Hi Inland team,<br />Here is the new idea for Inland.</p>
				<br/><h3 style=\"font-family: Helvetica, Arial, sans-serif; color: #9B9B9B; line-height: 24px;\">Idea</h3>
				<p style=\"font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #1733FB; line-height: 24px;\"><b>Why: </b>".$why."</p>
				<p style=\"font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #1733FB; line-height: 24px;\"><b>How: </b>".$how."</p>
				<p style=\"font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #1733FB; line-height: 24px;\"><b>What: </b>".$what."</p>
				<p style=\"font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-size: 16px; color: #1733FB; line-height: 24px;\"><b>Who: </b>".$who."</p>
				<p style=\"font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #1733FB; line-height: 24px;\"><b>Vision: </b>".$vision."</p>
				<br/><h3 style=\"font-family: Helvetica, Arial, sans-serif; color: #9B9B9B; line-height: 24px;\">Sender details</h3>
				<p style=\"font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #1733FB; line-height: 24px;\"><b>Occupation: </b>".$occupation."</p>
				<p style=\"font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #1733FB; line-height: 24px;\"><b>Name: </b>".$firstname." ".$lastname."</p>
				<p style=\"font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #1733FB; line-height: 24px;\"><b>Email: </b>".$email."</p>
				<p style=\"font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #1733FB; line-height: 24px;\"><b>Phone: </b>".$phone."</p><br />
				<p style=\"font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #1733FB; line-height: 24px;\">Sender <b>".$contactme." like</b> to be contacted about the submission.</p><br />
			</td>
			<td style=\"width: 20%;\"></td>
		</tr>
		<tr style=\"background: #FC6A6C;\">
			<td style=\"width: 20%;\"></td>
			<td style=\"width: 60%; text-align: left; padding: 30px 0;\">
				<span style=\"font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: #ffffff;\">&hearts; Keep making changes!</span>
			</td>
			<td style=\"width: 20%;\"></td>
		</tr>
	</table>
";

// message to customer
$message_customer = "
	<table cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%; margin: 0; padding: 0; background: #F5F5F5;\">
		<tr>
			<td colspan=\"5\" style=\"padding: 30px 0; text-align: center;\">
				<a href=\"http://www.inland.studio\">
					<img src=\"http://inland.studio/wp-content/themes/inland/assets/img/logo.png\" style=\"width: 125px;\" alt=\"\">
				</a>
			</td>
		</tr>
		<tr>
			<td style=\"width: 20%;\"></td>
			<td colspan=\"3\" style=\"width: 60%; text-align: left; padding: 30px 0;\">
				<p style=\"font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #1733FB; line-height: 24px;\">
					Hi ".$firstname.",<br/>
					Thank you for your idea!
				</p>
				<p style=\"font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #1733FB; line-height: 24px;\">
					<a href=\"http://www.inland.studio\" style=\"color: #1733FB;\">Inland Studio</a> is still very much work in progress and we appreciate every input.
				</p>
				<p style=\"font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: #9B9B9B; font-size: 14px; line-height: 20px;\">
					Meanwhile, you can follow our <a href=\"https://medium.com/inland\" style=\"color: #1733FB;\">blog</a> or check out our <a href=\"https://vimeo.com/inlandstudio\" style=\"color: #1733FB;\">videos</a> online.
				</p>
				<p style=\"font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #1733FB; line-height: 24px; margin-top: 2em;\">
					Thanks again,<br/>
					<b>Inland team</b>
				</p>
			</td>
			<td style=\"width: 20%;\"></td>
		</tr>
		<tr style=\"background: #FC6A6C;\">
			<td style=\"width: 20%;\"></td>
			<td style=\"width: 20%; text-align: left; padding: 30px 0;\">
                <a href=\"http://medium.com/inland\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: #ffffff;\">Blog</a>
            </td>
            <td style=\"width: 20%; text-align: left; padding: 30px 0;\">
                <a href=\"http://vimeo.com/inlandstudio\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: #ffffff;\">Vimeo</a>
            </td>
            <td style=\"width: 20%; text-align: left; padding: 30px 0;\">
                <a href=\"http://www.inland.studio/#contact\" style=\"font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: #ffffff;\">Contact</a>
            </td>
			<td style=\"width: 20%;\"></td>
		</tr>
	</table>
";

// sending emails
send_mail_to_studio($studio_email, $subject, $message_team, $email);
send_mail_to_customer($customer_email, $subject_customer, $message_customer, $email);
?>
