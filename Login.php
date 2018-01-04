<html>
<body>
<?php
if (isset($_POST["submit"])) 
{
    if (isset($_POST["farmerOrInvestor"])) 
    {
    	if (isset($_POST["farmerOrInvestor"])== "farmer") 
    	{
    		echo "farm";
		}
		else if (isset($_POST["farmerOrInvestor"])== "investor") 
		{
    		echo "invest";
		}
	
   }
}
?>

<!--
<INPUT TYPE="hidden" NAME="redirect" VALUE="Farmer_profile.html">

<INPUT TYPE="hidden" NAME="redirect" VALUE="Investor_profile.html">
-->

</body>
</html>