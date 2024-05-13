<html>

<head>
    <title>Payroll</title>
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

</head>

<body>
    <div class="container">

        <form method="POST" action="activity_payslip.php">


            <h1>Salary</h1>
            <label for="name">Employee ID</label>
            <br>
            <input type="text" name="EmployeeID">
            <br>
            <label for="name">Last Name</label>
            <br>
            <input type="text" name="LastName">
            <br>
            <label for="name">First Name</label>
            <br>
            <input type="text" name="FirstName">
            <br>
            <label for="name">MI</label>
            <br>
            <input type="text" name="MI">
            <br>
            <label for="name">Basic:</label>
            <br>
            <input type="number" name="Basic">
            <br>
            <label for="name">Incentive pay:</label>
            <br>
            <input type="number" name="IncentivePay">
            <br>
            <label for="name">House Rent Allowance</label>
            <br>
            <input type="number" name="HouseRentAllowance">
            <br>
            <label for="name">Meal Allowance</label>
            <br>
            <input type="number" name="Meal_Allowance">
            <br>
            <label for="name">Provident Fund</label>
            <br>
            <input type="number" name="ProvidentFund">
            <br>
            <label for="name">Tax</label>
            <br>
            <input type="number" name="Tax">
            <br>
            <label for="name">Loan</label>
            <br>
            <input type="number" name="Loan">
            <br>

            <input type="submit" value="View Payslip" class="btn btn-success">


        </form>
    </div>




</body>

</html>