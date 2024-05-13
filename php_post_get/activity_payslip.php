<html>

<head>
    <title>Payslip</title>
 <!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style>
label {
    width: 240px;
    display: inline-block;
    text-align: right;
}

.light-grey-textbox {
        background-color: #f2f2f2; /* light grey */
        border: 1px solid #ccc; /* border color */
    }

.textarea1 {
    padding: 10px;
    width: 75vh;
    height: 10px;
}
.textarea2 {
    padding: 10px;
    width: 50vh;
    height: 10px;
}
.button-container{
    text-align: center;
}
.center{
    text-align: center;
}

</style>

</head>

<body>
    <div class="container">
        <?php
        $ID = $_POST['EmployeeID'];
        $lName = $_POST['LastName'];
        $fName = $_POST['FirstName'];
        $MI = $_POST['MI'];
        $Basic = $_POST['Basic'];
        $incentPay = $_POST['IncentivePay'];
        $houseRentAllowance = $_POST['HouseRentAllowance'];
        $mealAllowance = $_POST['Meal_Allowance'];
        $providentFund = $_POST['ProvidentFund'];
        $tax = $_POST['Tax'];
        $loan = $_POST['Loan'];
        $fullname = $fName . " " . $MI . " " . $lName;
        $TotalEarnings = $Basic + $incentPay + $houseRentAllowance + $mealAllowance;
        $TotalDeductions = $providentFund + $tax + $loan;
        $NetPay = $TotalEarnings - $TotalDeductions;    

        echo
        '<h1>Employee Payslip</h1>
        <br />
        <hr style="border: 3px dashed black;" />
        <label for="name">Employee ID</label>
        <input type="text" class="light-grey-textbox textarea1" value=' . $ID . '>

        <br>

        <label for="name">Employee Name</label>
        <input type="text" class="light-grey-textbox textarea1" maxlength="50" size="75" value="' . $fullname . '">';

        echo
        '<h1>Earnings</h1>
        <hr style="border: 3px dashed black;" />
        <br />
        <label for="name">Basic:</label>
        <input type="text" class="light-grey-textbox textarea2" size="50" value=' . $Basic . '>
        <br>
        <label for="name">Incentive pay:</label>
        <input type="text" class="light-grey-textbox textarea2" maxlength="100" size="50" value=' . $incentPay . '>
        <br />
        <label for="name">House Rent Allowance</label>
        <input type="text" class="light-grey-textbox textarea2" maxlength="100" size="50" value=' . $houseRentAllowance . '>
        <br />
        <label for="name">Meal Allowance</label>
        <input type="text" class="light-grey-textbox textarea2" maxlength="100" size="50" value=' . $mealAllowance . '>';

        echo
        '<h1>Deductions</h1>
        <hr style="border: 3px dashed black;" />
        <br />
        <label for="name">Provident Fund</label>
        <input type="text" class="light-grey-textbox textarea2" size="50" value=' . $providentFund . '>
        <br />
        <label for="name">Tax</label>
        <input type="text" class="light-grey-textbox textarea2" maxlength="100" size="50" value=' . $tax . '>
        <br />
        <label for="name">Loan</label>
        <input type="text" class="light-grey-textbox textarea2" maxlength="100" size="50" value=' . $loan . '>';

        echo
        '<h1>Computations</h1>
        <hr style="border: 3px dashed black;" />
        <br>
        <label for="name">Total Earnings</label>
        <input type="text" class="light-grey-textbox textarea2" size="50" value=' . $TotalEarnings . '>
        <br>
        <label for="name">Total Deductions</label>
        <input type="text" class="light-grey-textbox textarea2" maxlength="100" size="50" value=' . $TotalDeductions . '>
        <br>
        <label for="name">NET PAY</label>
        <input type="text" class="light-grey-textbox textarea2" maxlength="100" size="50" value=' . $NetPay . '>';
        ?>
    </div>

    <div class="center">
    <a href="/activity_payroll.php" style="text-decoration: none;">
        <button style="background-color: green; color: white; width: 300px; border: 2px solid white;">
            Back
        </button>
    </a>
</div>


</div>


</body>

</html>