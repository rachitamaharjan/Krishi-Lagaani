<html>
<body>
<?php
if (isset($_POST["Login"])) {
    if (isset($_POST["farmer"])) {
    	<INPUT TYPE="hidden" NAME="redirect" VALUE="Farmer_profile.html">
	} else {
    	<INPUT TYPE="hidden" NAME="redirect" VALUE="Investor_profile.html">
	}
?>
</body>
</html>