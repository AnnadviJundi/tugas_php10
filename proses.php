<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <style>
        body {
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            margin-top: 50px;
        }
        input[type="submit"] {
            background-color: #39A7FF;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #87C4FF;
        }
    </style>
</head>

<body>
    <div class="container mt-5" >
    <form class="form-horizontal mx-auto" method="post">
    <fieldset>
    <legend class="text-center">Form Account Bank</legend>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">No Rekening</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-credit-card-alt"></i>
          </div>
        </div> 
        <input id="text" name="rekening" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-4 col-form-label">Nama Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="" name="customer" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Saldo Awal</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-money"></i>
          </div>
        </div> 
        <input id="text2" name="saldo" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <input type="submit" name="submit" value="Submit">
      </div>
  </div>
    </fieldset>
</form>
    </div>

    <?php
require_once 'BankAccount.php';

// Create initial accounts
$ab1 = new BankAccount("010", 5000000, "Messi");
$ab2 = new BankAccount("070", 10000000, "Ronaldo");


// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get form data
    $noRekening = $_POST['rekening'];
    $customer = $_POST['customer'];
    $saldoAwal = $_POST['saldo'];

    // Create a new BankAccount instance
    $newAccount = new BankAccount($noRekening, $saldoAwal, $customer);

    // Display the form data in a table along with the existing accounts
    echo '<table border="1" class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">No.Rekening</th>
                <th scope="col">Customer</th>
                <th scope="col">Saldo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>' . $ab1->nomor . '</td>
                <td>' . $ab1->customer . '</td>
                <td>' . $ab1->getSaldo() . '</td>
            </tr>
            <tr>
                <td>' . $ab2->nomor . '</td>
                <td>' . $ab2->customer . '</td>
                <td>' . $ab2->getSaldo() . '</td>
            </tr>
            <tr>
                <td>' . $newAccount->nomor . '</td>
                <td>' . $newAccount->customer . '</td>
                <td>' . $newAccount->getSaldo() . '</td>
            </tr>
        </tbody>
    </table>';
}
?>

    </tbody>
</table>



</body>

</html>