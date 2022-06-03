<?php
if (isset($_POST['operator'])) {
    $FirstNumber = $_POST['FirstNumber'];
    $SecondNumber = $_POST['SecondNumber'];
    $operator = $_POST['operator'];
    $CalculatorResult = '';
    if (is_numeric($FirstNumber) && is_numeric($SecondNumber)) {
        switch ($operator) {
            case "Sum":
                $CalculatorResult = $FirstNumber + $SecondNumber;
                break;
            case "Subtraction":
                $CalculatorResult = $FirstNumber - $SecondNumber;
                break;
            case "Multiplication":
                $CalculatorResult = $FirstNumber * $SecondNumber;
                break;
            case "Division":
                $CalculatorResult = $FirstNumber / $SecondNumber;
        }
    }
 # code...
}
 
    // function MyCalculator($Number1,$Number2, $Result) 

    // {
    //     switch($Result)
    //     {
    //     case "Addition": 

    //         $compute = $Number1 + $Number2; 
    //         break;
    //     case "Subtraction":
    //         $compute = $Number1 - $Number2; 
    //         break;
    //     case "Multiplication":
    //         $compute = $Number1 * $Number2; 
    //         break;
    //     case "Division":
    //         $compute = $Number1 / $Number2; 
    //         break;
    //     }
    //     return $compute; // returning variable
    // }
// echo "$Result <br /> <br /> 1st Number: $FirstNumber <br /> 2nd Number: $SecondNumber <br /><br />";
// echo "Answer is:" .MyCalculator($FirstNumber,$SecondNumber, $Result);
 // you need to pass $Result as argument of that function
?>
<form action="">
 first_num : <input type="text" name="FirstNumber" value="<?php echo $FirstNumber; ?>">
 second_num : <input type="text" name="SecondNumber" value="<?php echo $SecondNumber; ?>">
 <select name="Result">
 <option value="Addition">Addition</option>
 <option value="Subtraction">Subtraction</option>
 <option value="Multiplication">Multiplication</option>
 <option value="Division">Division</option>
 </select>
 <input type="submit" name="operator" value="submit">
</form>