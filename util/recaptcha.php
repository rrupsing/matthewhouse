require_once('library/recaptcha-php-1.11/recaptchalib.php');

$privatekey = "6LczBRQTAAAAAMXTUc7D32D1V-45mPiovpyQ1p9_";
$resp = recaptcha_check_answer ($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptchaChallengeField"], $_POST["recaptchaResponseField"]);

if (!$resp->is_valid)
echo json_encode("404");
else
echo  json_encode("200");