<?php
$vName = $_POST['vName'];
$birthday = $_POST['birthday'];
$vEmail = $_POST['vEmail'];
$hPhone = $_POST['hPhone'];
$wPhone = $_POST['wPhone'];
$cPhone = $_POST['cPhone'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$employment = $_POST['employment'];
$company = $_POST['company'];
$felony = $_POST['felony'];
$emName = $_POST['emName'];
$emAddress = $_POST['emAddress'];
$emPhone = $_POST['emPhone'];
$emRelationship = $_POST['emRelationship'];
$license = $_POST['license'];
$lState = $_POST['lState'];
$lNumber = $_POST['lNumber'];
$expDate = $_POST['expDate'];
$vehicle = $_POST['vehicle'];
$insurance = $_POST['insurance'];
$iCompany = $_POST['iCompany'];
$iNumber = $_POST['iNumber'];
$geoArea = $_POST['geoArea'];
$availability = $_POST['availability'];
$rNameOne = $_POST['rNameOne'];
$rPhoneOne = $_POST['rPhoneOne'];
$rKnownOne = $_POST['rKnownOne'];
$rCapacityOne = $_POST['rCapacityOne'];
$rNameTwo = $_POST['rNameTwo'];
$rPhoneTwo = $_POST['rPhoneTwo'];
$rKnownTwo = $_POST['rKnownTwo'];
$rCapacityTwo = $_POST['rCapacityTwo'];

$formcontent=" 
	Personal Information \n \n
	Name: $vName \n
	Date of Birth: $birthday \n
	Email: $vEmail \n
	Home Phone: $hPhone \n
	Work Phone: $wPhone \n
	Cell Phone: $cPhone \n
	Street Address: $address \n
	City: $city \n
	State: $state \n
	Are you employed? $employment \n
	If yes, where? $company \n
	Have you ever been convicted of a felony? $felony \n
	\n
	In case of emergency, contact: \n
	\n
	Emergency Contact: $emName \n
	Address: $emAddress \n
	Phone: $emPhone \n
	Relationship: $emRelationship \n
	\n
	Driver's License Information \n
	\n
	Do you have a valid driver's license? $license \n
	Issuing State: $lState \n
	License Number: $lNumber \n
	Expiration Date: $expDate \n
	\n
	Vehicle Information \n
	\n
	Do you have use of a reliable vehicle? $vehicle \n
	Do you have proof of insurance? $insurance \n
	Is yes, what carrier?: $iCompany \n
	Policy Number: $iNumber \n
	\n
	Volunteer Preferences \n
	\n
	Geographic area preferred: $geoArea \n
	Availability: $availability \n
	\n
	Personal References \n
	\n
	Name: $rNameOne \n
	Phone: $rPhoneOne \n
	How long have you known this person? $rKnownOne \n
	In what capacity? $rCapacityOne \n
	Name: $rNameTwo \n
	Phone: $rPhoneTwo \n
	How long have you known this person? $rKnownTwo \n
	In what capacity? $rCapacityTwo \n
";

$recipient = "steve@steveroettger.com";

$subject = "Volunteer Application";

$mailheader = "From: $vEmail \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

// Forward to "Thank You" page
header('Location: ' . 'http://mow.aboutverge.com/volunteer/application-submitted.php');
exit;

?>
