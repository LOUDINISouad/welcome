<?php
$servername ="127.0.0.1";
$username ="root";
$password ="" ;
$dbname ="miracle";

try{
   $conn = new PDO("mysql:host= servername;dbname=$dbname" ,$username,$password);

  $conn-> setAttribute(PDO::ATTR_ERRMODE. PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "Error:  ".$e->getMessage();

}



$FullName = $Email = $Adress= $City =$CardName =$CardNumber =$ExpMonth= $ExpYear= $FullNameErr =
$EmailErr = $AdressErr = $CityErr =$CardNameErr =$CardNumberErr =$ExpMonthErr= $ExpYearErr = $error ="";


//now validate the form inputes
 
//check if Full Name is empty
if ( empty (test_input($_POST["FullName"]))) {
    $FullNameErr="ENTER FullName" ;
                                            } 
else{
    $FullName= test_input($_POST["FullName"]);
    }

 //check if Email is empty
    if ( empty(test_input($_POST["Email"]))) {
        $EmailErr="ENTER Email" ;
                                                } 
     else{
        $Email= test_input($_POST["Email"]);
        }


  //check if Adress is empty
  if ( empty(test_input($_POST["Adress"]))) {
    $AdressErr="ENTER Adress" ;
                                            } 
else{
    $Adress= test_input($_POST["Adress"]);
    }

 
     //check if City is empty
  if ( empty(test_input($_POST["City"]))) {
    $CityErr="ENTER City" ;
                                            } 
else{
    $City= test_input($_POST["City"]);
    }

    //check if CardName is empty
    if ( empty(test_input($_POST["CardName"]))) {
        $CardNameErr="ENTER CardName" ;
                                                } 
    else{
        $CardName= test_input($_POST["CardName"]);
        }
    
//check if CardNumber is empty
if ( empty(test_input($_POST["CardNumber"]))) {
    $CardNumberErr="ENTER CardNumber" ;
                                            } 
else{
    $CardNumber= test_input($_POST["CardNumber"]);
    }

//check if ExpMonth is empty
if ( empty(test_input($_POST["ExpMonth"]))) {
    $ExpMonthErr="ENTER ExpMonth" ;
                                            } 
else{
    $ExpMonth= test_input($_POST["ExpMonth"]);
    }

    

}

function test_input($data) {
    $data = trim ($data) ; //eliminer les espaces tab new line
    $data = stripcslashes($data); //eliminer les \
    $data = htmlspecialchars($data) ; //convertir anything else
    return $data ;

}
   
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
   <link  rel="stylesheet" href="contactus.css">
</head>
 <body>
 
     <div class="row">
    <div class="col-75">
     <div class="container">

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post" >

                <div class="row">
                    <div class="col-50">
                        <h3>Billing Address</h3>
                        <label for="FullName"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="FullName" name="FullName" placeholder="Full Name">
                        <label for="Email"><i class="m_fa m_fa-envelope"></i> Email</label>
                        <input type="text" id="Email" name="Email" placeholder="Email">
                        <label for="Adress"><i class="m_fa m_fa-address-card-o"></i> Adress</label>
                        <input type="text" id="Adress" name="Adress" placeholder="Adress">
                        <label for="City"><i class="m_fa m_fa-institution"></i> City</label>
                        <input type="text" id="City" name="City" placeholder="City" >
                        
               </div>
</div>
                    <div class="col-50">
                        <h3>Payment</h3>
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-container">
                            <i class="fa m_fa-cc-visa" style="color:navy"></i>
                            <i class="fa m_fa-cc-amex" style="color:blue"></i>
                            <i class="fa m_fa-cc-mastercard" style="color:red"></i>
                            <i class="fa m_fa-cc-discover" style="color:orange"></i>
                        </div>
                        <label for="CardName">Name on Card</label>
                        <input type="text" id="CardName" name="CardName" placeholder="CardName">
                        <label for="CardNumber">Credit Card number</label>
                        <input type="text" id="CardNumber" name="CardNumber"  placeholder="CardNumber">
                        <label for="ExpMonth">Exp Month</label>
                        <input type="text" id="ExpMonth" name="ExpMonth"  placeholder="ExpMonth">

                        <div class="row">
                            <div class="col-50">
                                <label for="Expyear">Exp Year</label>
                                <input type="text" id="ExpYear" name="ExpYear"  placeholder="ExpYear">
                            </div>
                            
                        </div>
                    </div>

                </div>
               
                <input type="submit" value="SEND" class="btn">
            </form>
        </div>
    </div>

   
    </div>


</body>
</html>