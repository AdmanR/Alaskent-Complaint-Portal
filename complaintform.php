<html>
<head>
	<title>Complaint Form</title>
	<link rel="stylesheet" href="formstyle.css" />
</head>
<body>
<script>
function ValidateContactForm()
{
    var name = document.ContactForm.Name;
    var email = document.ContactForm.Email;
    var phone = document.ContactForm.Telephone;
    var nocall = document.ContactForm.DoNotCall;
    var what = document.ContactForm.Subject;
    var comment = document.ContactForm.Comment;
    var dno = document.ContactForm.DeskNo;
    var eid = document.ContactForm.EmpId;
    var submit=document.ContactForm.submit;

if (dno.value.length>4 || dno.value=="" || dno.value<=0)
{
	window.alert("Please enter valid Desk No");
	return false;
}
if (isNaN(dno.value))
{
    window.alert("Please enter numeric values only.");
    return false;
}
if (name.value == "")
{
    window.alert("Please enter your name.");
    name.focus();
    return false;
}
if (email.value == "")
{
    window.alert("Please enter a valid e-mail address.");
    email.focus();
    return false;
}

if (email.value.indexOf("@", 0) < 0)
{
    window.alert("Please enter a valid e-mail address.");
    email.focus();
    return false;
}
if (email.value.indexOf(".", 0) < 0)
{
    window.alert("Please enter a valid e-mail address.");
    email.focus();
    return false;
}
if (isNaN(eid.value))
{
    window.alert("Please enter numeric values only.");
    return false;
}
if (eid.value.length!=11 || eid.value=="" || eid.value<=0)
{
	window.alert("Please enter valid EmpId");
	return false;
}
if(isNaN(phone.value) || phone.value.length!=10)
{
	window.alert("Please enter valid mobile no ");
	return false;
}
if (what.selectedIndex < 1)
{
    alert("Please tell us how we can help you.");
    what.focus();
    return false;
}
if(comment.value.trim().length<=10)
{
	window.alert("Please describe your complaint");
	return false;
}
if (true) {
	window.alert("Your Complaint have been registered");
}

}
</script>

<div class="logo" id="logo">
	<a href="./complaintportal.php">
		<img src=img/logo.png alt="nmims" style="height: 140px; width: 200px; object-fit: contain; padding: 0px;">
	</a>
</div>


<div class="d1" id="d1">
	<h2 style="text-align: center;">Complaint Form</h2>
	<form action = "insert.php"  method="POST" name="ContactForm" onSubmit="return ValidateContactForm()">
    <p>Desk No: <br><input type="text" size="50" name="DeskNo"></p>
    <p>Name: <br><input type="text" size="50" name="Name"></p>
    <p>E-mail Address: <br> <input type="text" size="50" name="Email"></p>
    <p>Emp Id: <br><input type="text" size="50" name="EmpId"></p>
    <p>Mobile No:<br> <input type="text" size="50" name="Telephone"><br>
    <p>What can we help you with?<br>
        <select type="text" value="" name="Subject" style="background-color: grey;">
        	<option> </option>
            <option>Furniture Problem</option>
            <option>Electrical Circuit Problem</option>
            <option>Work Environment Problem</option>
            <option>Command and Task Problem</option>
            <option>Other</option>
        </select></p>
    <p>Describe Your Complaint:<br> <abbr><textarea cols="50" name="Comment">  </textarea></abbr></p>
    <p><input type="submit" value="Submit" name="submit" id="sub" class="sub">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <a href="logout.php"><button type="button" class="sub">LOGOUT</button></a></p>
</form>
</div>
</body>
</html>