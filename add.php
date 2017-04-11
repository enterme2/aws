 <!DOCTYPE html>


<html>
<head>
<title>SedafiatFormDemo</title>
</head>
<body>

<center><h1>Sedafiat Sdn Bhd</h1></center>

<form action="insert.php" method="post">
<table>
<tr><th><b>A. <u>Work Request</b></u></th></tr>
<tr><th></th></tr>
<tr>
	<th>Requested by :</th><th><input type="text" name="RequestedBy"></th>
	<th>Job Title :</th><th><input type="text" name="JobTitle"> </th>
	<th>Ref :</th><th><input type="text" name="Ref"> </th>
</tr>
<tr>
	<th>Contact No :</th><th><input type="text" name="ContactNo"></th>
	<th>Dept :</th><th><input type="text" name="Dept"></th>
</tr>
<tr>
	<th>AssetNo : </th><th><input type="text" name="AssetNo"></th>
	<th>Asset name : </th><th><input type="text" name="AssetName"></th>
</tr>
<tr>
	<th>Location Code :</th><th> <input type="text" name="LocationCode"></th>
	<th>Location Name :</th><th> <input type="text" name="LocationName"></th>
</tr>
<tr>
	<th>Work Group : </th><th><input type="text" name="WorkGroup"></th>
	<th>Variation Status : </th><th><input type="text" name="VariationStatus"></th>
</tr>
<tr>
	<th>Work Category : </th><th><input type="text" name="WorkCategory"></th>
	<th>Condition Status : </th><th><input type="text" name="ConditionStatus"></th>
</tr>
<tr>
	<th>Requested Details : </th><th><input type="text" name="RequestedDetails"></th>
</tr>
<tr><th></th></tr>
<tr><th><b>B. <u>Assessment </b></u></th></tr>
<tr><th></th></tr>
<tr>
	<th>ID/Name : </th><th><input type="text" name="IDName"></th>
	<th>Target Date : </th><th><input type="text" name="TargetDate"></th>
</tr>
<tr>
	<th>Requestor Signature : </th><th><input type="text" name="rSignature"></th>
	<th>Date/Time : </th><th><input type="text" name="dTime"></th>
</tr>
<tr>
	<th>Assesment Details : </th><th><input type="text" name="aDetails"></th>
</tr>
<tr>
	<th>Assessment Maint Status : </th><th><input type="text" name="amStatus"></th>
	<th>Loaner Provided : </th><th><input type="text" name="lProvided"></th>
</tr>
<tr>
	<th>Loaner Info</th>
	<th>Asset Info - </th><th><input type="text" name="aInfo"></th>
</tr>
<tr>
	<th></th>
	<th>Loaner Start Date/Time : </th><th><input type="text" name="lStartDateTime"></th>
	<th>Loaner End Date/Time : </th><th><input type="text" name="lEndDateTime"></th>
</tr>
<tr>
	<th></th>
	<th>Loaner Received By : </th><th><input type="text" name="lReceivedBy"></th>
	<th>Loaner Return By : </th><th><input type="text" name="lReturnBy"></th>
</tr>
<tr><th></th></tr>
<tr><th><b>C. <u>Part Details</b></u></th></tr>
<tr><th></th></tr>
<tr>
	<th>Description</th>
	<th>UoM</th>
	<th>Qty used(U)/Returned(Rt)</th>
</tr>
<tr>
	<th><input type="text" name="d1"></th>
	<th><input type="text" name="u1"></th>
	<th><input type="text" name="q1"></th>
</tr>
<tr>
	<th><input type="text" name="d2"></th>
	<th><input type="text" name="u2"></th>
	<th><input type="text" name="q2"></th>
</tr>
<tr>
	<th><input type="text" name="d3"></th>
	<th><input type="text" name="u3"></th>
	<th><input type="text" name="q3"></th>
</tr>
<tr><th></th></tr>
<tr><th><b>D. <u>Employee</b></u></th></tr>
<tr><th></th></tr>
<tr>
	<th>Employee No</th>
	<th>Employee Name</th>
	<th>Task Code</th>
	<th>Date</th>
	<th>Start Time</th>
	<th>End Time</th>
	<th>Repair Hours</th>
</tr>
<tr>
	<th><input type="text" name="eNo1"></th>
	<th><input type="text" name="eN1"></th>
	<th><input type="text" name="tC1"></th>
	<th><input type="text" name="date1"></th>
	<th><input type="text" name="sTime1"></th>
	<th><input type="text" name="eTime1"></th>
	<th><input type="text" name="rHour1"></th>
</tr>
<tr>
	<th><input type="text" name="eNo2"></th>
	<th><input type="text" name="eN2"></th>
	<th><input type="text" name="tC2"></th>
	<th><input type="text" name="date2"></th>
	<th><input type="text" name="sTime2"></th>
	<th><input type="text" name="eTime2"></th>
	<th><input type="text" name="rHour2"></th>
</tr>
<tr>
	<th><input type="text" name="eNo3"></th>
	<th><input type="text" name="eN3"></th>
	<th><input type="text" name="tC3"></th>
	<th><input type="text" name="date3"></th>
	<th><input type="text" name="sTime3"></th>
	<th><input type="text" name="eTime3"></th>
	<th><input type="text" name="rHour3"></th>
</tr>
<tr>
	<th><input type="text" name="eNo4"></th>
	<th><input type="text" name="eN4"></th>
	<th><input type="text" name="tC4"></th>
	<th><input type="text" name="date4"></th>
	<th><input type="text" name="sTime4"></th>
	<th><input type="text" name="eTime4"></th>
	<th><input type="text" name="rHour4"></th>
</tr>
<tr><th></th></tr>
<tr><th><b>E. <u>Completion</b></u></th></tr>
<tr><th></th></tr>
<tr>
	<th>Date/Time Work Started : </th><th><input type="text" name="dtwS"></th>
	<th>Date/Time Work Completed : </th><th><input type="text" name="dtwC"></th>
</tr>
<tr>
	<th>Action Taken </th><th><input type="text" name="aTaken"></th>
</tr>
<tr>
	<th>Electrical Safety Test </th><th><input type="text" name="esTest"></th>
	<th>Performance Test </th><th><input type="text" name="pTest"></th>
</tr>
<tr>
	<th>QC PPM </th><th><input type="text" name="qcppm"></th>
	<th>QC Uptime </th><th><input type="text" name="qcuptime"></th>
</tr>
<tr><th></th></tr>
<tr>
	<th colspan="4">Completed By (SSB) </th>
	<th colspan="4">Verified By (MoH) </th>
</tr>
<tr><th></th></tr>
<tr>
	<th>Name: </th><th><input type="text" name="nameCompleted"></th>
	<th>Signature: </th><th><input type="text" name="sCompleted"></th>

	<th>Name: </th><th><input type="text" name="nameVerified"></th>
	<th>Signature: </th><th><input type="text" name="sVerified"></th>
</tr>
<tr>
	<th></th><br><th></th>
	<th></th><br><th></th>
	<th>Designation: </th><th><input type="text" name="dVerified"></th>	
</tr>

<tr>
	<th>Date: </th><th><input type="text" name="dateCompleted"></th>
	<th>Time: </th><th><input type="text" name="timeCompleted"></th>

	<th>Date: </th><th><input type="text" name="dateVerified"></th>
	<th>Time: </th><th><input type="text" name="timeVerified"></th>
</tr>
<tr><th><br></th></tr>
<tr>
	<th colspan="4"></th>
	<th colspan="4">(Random Sampling Verification(DVC))</th>
</tr>
<tr>
	<th colspan="4">1st Verification performed by (DVO1): </th>
	<th colspan="4">2nd Verification performed by (DVO2): </th>
</tr>
<tr>
	<th>Name: </th><th><input type="text" name="nameDV01"></th>
	<th></th>
	<th></th>
	<th>Name: </th><th><input type="text" name="nameDV02"></th>
	<th></th>
</tr>
<tr>
	<th>Date: </th><th><input type="text" name="dateDV01"></th>
	<th>Time: </th><th><input type="text" name="timeDV01"></th>
	<th>Date: </th><th><input type="text" name="dateDV02"></th>
	<th>Time: </th><th><input type="text" name="timeDV02"></th>
</tr>
<tr><th><br></th></tr>
<tr><th><b>F. <u>Validation (For Internal Use Only)</b></u></th></tr>

<tr>
	<th>Validation (Yes/No) </th>
	<th>F1 </th>
	<th>F4 </th>
	<th>F5 </th>
	<th>F6 </th>
</tr>
<tr>
	<th><input type="text" name="validaton"></th>
	<th><input type="text" name="vF1"></th>
	<th><input type="text" name="vF4"></th>
	<th><input type="text" name="vF5"></th>
	<th><input type="text" name="vF6"></th>
</tr>
<tr><th><br></th></tr>	
<tr>

	<th>If No. Please Justify</th>
	<th><textarea rows="4" cols="25" input type="text" name="vJustify"></textarea></th>
</tr>
</table>
<br>
<center><input type="submit" name="Add"></center>
</form>

</body>
</html> 