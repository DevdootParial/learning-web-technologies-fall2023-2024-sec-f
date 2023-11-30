function validateForm()
{
    var Librian_ID = document.getElementById('Librianid').value;
    var Librian_Name = document.getElementById('Librianname').value;
    var Librian_Email= document.getElementById('Librianemail').value;
    var Contact_Number = document.getElementById('Contactnumber').value;
    var Assigned_Role = document.getElementById('Assignedrole').value;
  
    if (Librianid.length < 5)
    {
        alert("Librianid must be at least 5 characters long!");
        return false;
    }


    if (Librian_ID === "" || Librian_Name === "" || Librian_Email === "" || Contact_Number === "" || Assigned_Role === "")
    {
        alert("Null Librianid or Librianname or Librian_Email or Contact_Number or Assigned_Role!");
        return false;
    }

    return true;
}