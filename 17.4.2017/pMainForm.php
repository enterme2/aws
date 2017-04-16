 <!DOCTYPE html>


<html>
<head>
<title>Preventive Maintenance</title>
</head>
<body>
<center>
<table>
<tr>
	<th></th>
	<th><h1>HOSPITAL SUPPORT SERVICE</h1></th>
</tr>
<tr>
	<th>Sipitang</th>
	<th><h2>PREVENTIVE MAINTENANCE WORK</h2></th>
</tr>
</table>
</center>

<form action="insert.php" method="post">

<table>
<tr>
	<th align="right">Work No:</th><th><input type="text" name="workNo"></th>
	<th align="right">Date/Time:</th><th><input type="text" name="dateTime1"></th>
</tr>
<tr>
	<th align="right">Work Group:</th><th><input type="text" name="workGroup"></th>
	<th align="right">WR Type:</th><th><input type="text" name=""></th>
</tr>
<tr>
	<th align="right">Period:</th><th><input type="text" name="period"></th>
</tr>
<tr>
	<th colspan="2"><br>QC-PPM/RT</th>
	<th colspan="2"><br>QC-Uptime</th>
</tr>
<tr>
	<th align="right"><br>Asset No:</th><th><br><input type="text" name="assetNo"></th>
	<th align="right"><br>Type Code:</th><th><br><input type="text" name="typeCode"></th>
</tr>
<tr>
	<th align="right">Asset Name:</th><th><input type="text" name="assetName"></th>
	<th align="right">Location Name:</th><th><input type="text" name="locationName"></th>
</tr>
<tr>
	<th align="right">Location Code:</th><th><input type="text" name="locationCode"></th>
	<th align="right">Department Name:</th><th><input type="text" name="departmentName"></th>
</tr>
<tr>
	<th align="right">Asset status:</th><th><input type="text" name="assetStatus"></th>
	<th align="right">Asset Critically:</th><th><input type="text" name="assetCritically"></th>
</tr>
<tr>
	<th align="right">Variation status:</th><th><input type="text" name="variationStatus"></th>
	<th align="right">Asset Condition:</th><th><input type="text" name="assetCondition"></th>
</tr>
<tr>
	<th align="right">Brand/Model:</th><th><input type="text" name="brandModel"></th>
	<th align="right">Serial No:</th><th><input type="text" name="serialNo"></th>
</tr>
<tr>
	<th align="right">Manufacturer Brand:</th><th><input type="text" name="manufacturer"></th>
	<th align="right">Vendor:</th><th><input type="text" name="vendor"></th>
</tr>
<tr>
	<th align="right">Service Agent:</th><th><input type="text" name="serviceAgent"></th>
	<th align="right">Service Life(Yrs):</th><th><input type="text" name="serviceLife"></th>
</tr>
<tr>
	<th align="right">Contact Person:</th><th><input type="text" name="contactPerson"></th>
	<th align="right">Phone No:</th><th><input type="text" name="phoneNo"></th>
</tr>
<tr>
	<th align="right">Previous Work Date:</th><th><input type="text" name="pWorkDate"></th>
	<th align="right">Previous Repair Date:</th><th><input type="text" name="pRepairDate"></th>
</tr>
<tr>
	<th>Task No</th>
	<th>Description</th>
	<th>Target Date</th>
	<th>Next</th>
	<th>Status</th>
</tr>
<tr>
	<th><input type="text" name="taskNo"></th>
	<th><input type="text" name="description"></th>
	<th><input type="text" name="targetDate"></th>
	<th><input type="text" name="next"></th>
	<th><input type="text" name="status"></th>
</tr>
<tr>
	<th align="right"><br>Requested Details:</th><th><br><input type="text" name="requestedDetails"></th>
</tr>
<tr>
	<th><br>Preventive Work Request</th>
</tr>
<tr>
	<th align="right">Contract/Warranty Information:</th><th><input type="text" name="cWarrantyInformation"></th>
</tr>
<tr>
	<th align="right">Contractor/Company Name:</th><th><input type="text" name="cCompanyName"></th>
</tr>
<tr>
	<th align="right">Contract/Warranty Start Date:</th><th><input type="text" name="cwStartDate"></th>
	<th align="right">End Date:</th><th><input type="text" name="cwEndDate"></th>
</tr>
<tr>
	<th align="right">Telephone No:</th><th><input type="text" name="telNo"></th>
</tr>
<tr>
	<th><br>Part Details</th>
</tr>
<tr>
	<th>Description</th>
	<th>UOM</th>
	<th>Qty Used(U)/Returned(Rt)</th>
</tr>
<tr>
	<th><input type="text" name="pdetailsDesc1"></th>
	<th><input type="text" name="uom1"></th>
	<th><input type="text" name="qUsedReturned1"></th>
</tr>
<tr>
	<th><input type="text" name="pdetailsDesc2"></th>
	<th><input type="text" name="uom2"></th>
	<th><input type="text" name="qUsedReturned2"></th>
</tr>
<tr>
	<th><input type="text" name="pdetailsDesc3"></th>
	<th><input type="text" name="uom3"></th>
	<th><input type="text" name="qUsedReturned3"></th>
</tr>
<tr>
	<th><br>Employee Details</th>
</tr>
<tr>
	<th>Employee No.</th>
	<th>Name</th>
	<th>Task Code</th>
	<th>Date</th>
	<th>Start Time</th>
	<th>End Time</th>
	<th>Preparation Hours</th>
</tr>
<tr>
	<th><input type="text" name="employeeNo1"></th>
	<th><input type="text" name="nameEmployee1"></th>
	<th><input type="text" name="taskCode1"></th>
	<th><input type="text" name="dateEmDetails1"></th>
	<th><input type="text" name="startTime1"></th>
	<th><input type="text" name="endTime1"></th>
	<th><input type="text" name="prepHours1"></th>
</tr>
<tr>
	<th><input type="text" name="employeeNo2"></th>
	<th><input type="text" name="nameEmployee2"></th>
	<th><input type="text" name="taskCode2"></th>
	<th><input type="text" name="dateEmDetails2"></th>
	<th><input type="text" name="startTime2"></th>
	<th><input type="text" name="endTime2"></th>
	<th><input type="text" name="prepHours2"></th>
</tr>
<tr>
	<th><input type="text" name="employeeNo3"></th>
	<th><input type="text" name="nameEmployee3"></th>
	<th><input type="text" name="taskCode3"></th>
	<th><input type="text" name="dateEmDetails3"></th>
	<th><input type="text" name="startTime3"></th>
	<th><input type="text" name="endTime3"></th>
	<th><input type="text" name="prepHours3"></th>
</tr>
<tr>
	<th><br>Completion</th>
</tr>
<tr>
	<th align="right"><br>Performance Test:</th><th><br><input type="text" name="performanceTest"></th>
	<th align="right"><br>Electrical Safety Test:</th><th><br><input type="text" name="eSafetyTest"></th>
</tr>
<tr>
	<th align="right">PPM Agreed Date:</th><th><input type="text" name="ppmAgreedDate"></th>
</tr>
<tr>
	<th align="right">Date/Time Work Started:</th><th><input type="text" name="dateTimeStarted"></th>
	<th align="right">Date/Time Work Completed:</th><th><input type="text" name="dateTimeCompleted"></th>
	<th align="right">Downtime Hours:</th><th><input type="text" name="downtimeHours"></th>
</tr>
<tr>
	<th align="right">Action Taken:</th><th><input type="text" name="actionTaken"></th>
</tr>
<tr>
	<th align="right">Completed by:</th><th><input type="text" name="completedBy"></th>
	<th align="right">Date:</th><th><input type="text" name="dateCompleted"></th>
	<th align="right">Verified by:</th><th><input type="text" name="verifiedBy"></th>
	<th align="right">Date:</th><th><input type="text" name="dateVerified"></th>
</tr>
<tr>
	<th></th><th></th>
	<th align="right">Time:</th><th><input type="text" name="timeCompleted"></th>
	<th></th><th></th>
	<th align="right">Time:</th><th><input type="text" name="timeVerified"></th>
</tr>

</table>
<br>
<center><input type="submit" value="Add"></center>
</form>

</body>
</html> 