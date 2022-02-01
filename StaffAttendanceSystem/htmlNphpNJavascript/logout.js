function exit() {
    if(confirm("Are you sure want to exit?"))//ask staff
    {   
      //  window.location.replace("loginUI.html"); //if yes go to login page
      window.location.href = "login.php";
        return true;
    }else{}
     
	}
