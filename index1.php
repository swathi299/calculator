<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">

</head>
<body>
  <section class="section container-fluid">
    <h1>Calculator</h1>
    <h3>Enter two numbers to calculate</h3>
    <br/>
    <br/>
    <div class="form-group">
        <form method="POST">

        <h4 class="text">Enter first number <input class="input" name="firstnum" type="text"></h4>
        <h4 class="text">Enter Second number <input class="input" name="secondnum" type="text"></h4>
        <h4 class="text">Choose the operator</h4> 
        
        <select name="operator" id="operator">
            <option>Choose..</option>
            <option value="Add">Addition</option>
            <option value="Sub">Subtraction</option>
            <option value="Mul">Multiplication</option>
            <option value="Div">Division</option>
            
            
            </select>
            <br/>
            <br/>
            <input class="btn btn secondary" name="submit" type="submit" value="Calculate">

</form>
<br/>

    

    <?php
    if(isset($_POST['submit'])){
       $firstnum = $_POST['firstnum'];
       $secondnum = $_POST['secondnum'];
       $operator = $_POST['operator'];
    
       switch($operator){
           case "Add" : $sum = $firstnum + $secondnum;

           
           echo "The addition is  {$sum} ";
           
           break;
           case "Sub" : $sub = $firstnum - $secondnum;
            echo "The Subtraction is $sub ";
           break;
           case "Mul" : $mul =  $firstnum * $secondnum;
            echo "The multiplication is $mul";
           break;
           case "Div" : $div = $firstnum / $secondnum;
             echo "The division is $div";
           break;
           default: echo "Enter correctly";
       }
    }
    
    
    
    ?>
    


    </div>
  </section>


  
</body>

</html>
