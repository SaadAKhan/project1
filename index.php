<!DOCTYPE html>
<html>
<style>
input[type=text], input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit]  {
    width: 100%;
    background-color: limegreen;
    color: white;
    padding: 14px 20px;
    margin: 20px 15px 10px 5px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: green
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
}
</style>
<body>

<h3>Please sign up!</h3>

<div>
  <form name = "myform" action="/action_page.php" onsubmit= "return validateForm()">
    <label for="uname">Username</label>
    <input type="text" name="uname" placeholder="Enter your username." required>

    <label for="rnum">RollNumber</label>
    <input type="text" name="rnum"  placeholder="Enter your rollnumber" required>
    
    <label for="pw">Password</label>
    <input type="password" name="pw"  placeholder="Enter a password" required>
    
    <label for="vnum">Vehicle Number</label>
    <input type="text" name="vnum"  placeholder="Enter your vehical number">

    <label for="cls">Class</label>
    <select name="cls" required>
      <option value="am">Morning</option>
      <option value="pm">Evening</option>
    </select>
    
    <label for="crs">Subjects</label>
    <select name="crs" required>
      <option value="am">Computer Science</option>
      <option value="pm">Mathematics</option>
       <option value="am">Physics</option>
      <option value="pm">English</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>
<script>
    function validateForm() {
    var user = document.forms["myform"]["uname"].value;
    var idd = document.forms["myform"]["rnum"].value;
    var pww = document.forms["myform"]["pw"].value;
    var vcn = document.forms["myform"]["vnum"].value;
    var letters = /^[A-Za-z]+$/;
    var numbers = /^[0-9]+$/;
    if (user.length >= 10 || user.length < 3)  {  
        alert("The length of the username should be between 4 to 10");    
        return false;  
    }  
    if(!user.match(letters))  {   
        alert('Username must have alphabet characters only');    
        return false;  
    }
     
    if (idd.length !== 8) {
        alert("The rollnumber has to be 8 characters");
        return false;  
    }
    if(!idd.match(numbers)){    
        alert('The rollnumber must have numbers only');    
        return false;  
    }
    if (pww.length > 10 || pww.length < 4)  {  
        alert("The length of the password should be between 4 to 10");    
        return false;  
    }  
   if (vcn.length > 8 || vcn.length < 5)  {  
        alert("The length of the vehicle number should be between 5 an 8");    
        return false;  
    }
    }   
</script>

</body>
</html>
