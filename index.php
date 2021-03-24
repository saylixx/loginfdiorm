    <!DOCTYPE html>   
    <html>   
    <head>  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title> Login Page </title>  
    <style>   
    Body {  
      font-family: Calibri, Helvetica, sans-serif;  
      background-color: white;
    }  
     form {   
            border: 3px solid #f1f1f1;   
        }   
     input[type=text], input[type=password], [name = pwd]{
            width: 100%;   
            margin: 8px 0;  
            padding: 12px 20px;   
            display: inline-block;   
            border: 2px solid green;   
            box-sizing: border-box;   
        }  
     button:hover {   
            opacity: 0.7;   
        }   
      
            
           
    </style>   
    </head>    
    <body>    
        <center> <h1> Log in </h1> </center>   
        <form   >  
            <div class="container">   
                <label>Username : </label>   
                <input type="text" placeholder="Enter Username" name="userid" required>  
                <label>Password : </label>   
                <input type="password" placeholder="Enter Password" name="pwd" required> 
                <tr>
                    <td ><input type="Reset" value="CLEAR"></td>
                    <td><input type="submit" onclick="return check(this.form)" value="SUBMIT">

                    </td>
                </tr>
                <script language="javascript">
function check(form)


{
if(form.userid.value == "Ilyas" && form.pwd.value == "123")
{
    form.action = "https://alatooooooo.herokuapp.com";
    return true;
}



{
  alert("Error Password or Username")
  return false;
}
}
</script>
            </div>   
        </form> 

    </body>     


    </html>  
