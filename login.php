

<html>  
<head>  
    <title>Login</title>  
    <link rel = "stylesheet" type = "text/css" href = "style.css">
</head>  
<body>  
    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "auth.php" onsubmit = "return validation()" method = "POST">  
            <p><label> email: </label>  
                <input type="text" id ="email" name="email" /></p>  
            <p><label> Password: </label>  
                <input type="password" id ="password" name="password" />  
            </p>  
            <p><input type="submit" id ="btn" value ="Login" /></p>
            <a href="register.php" onclick> Don't have an account? Click here to make one! </a> 
        </form>  
    </div>
    <script>  
            function validation()  
            {  
                var id=document.f1.email.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("Email and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Email is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>    
</body>
</html>