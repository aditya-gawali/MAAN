<?php
error_reporting(0);
include 'partials/dbconnect.php';
$SHNumber = $_POST["SHNumber"];
$date = $_POST["date"];
$name = $_POST["name"];
$address = $_POST["add"];
$DOB = $_POST["DOB"];
$mobile = $_POST["phone"];
$email = $_POST["email"];
$nname = $_POST["nname"];
$nrel = $_POST["nrel"];
$ndate = $_POST["ndate"];
$refno = $_POST["refno"];
$refname = $_POST["refname"];
$ShareAssign = $_POST["ShareAssign"];
$shareprice = $_POST["shareprice"];
// $sql = "INSERT INTO `share_holder` (`srn`, `SHNumber`, `first_name`, `last_name`, `company`, `phone`, `email`, `ShareAssign`) VALUES (NULL, '$SHNumber', '$first_name', '$last_name', '$company', '$phone', '$email', '$ShareAssign')";
// $result = mysqli_query($conn, $sql);
$sql = "INSERT INTO `share` (`serialNumber`, `shareHolderNumber`, `openingDate`, `name`, `address`, `dateOfBirth`, `mobileNumber`, `email`, `nomineeName`, `nomineeRelation`, `nomineeBirthDate`, `referenceNumber`, `referenceName`, `shares`) VALUES (NULL, '$SHNumber', '$date', '$name', '$address', '$DOB', '$mobile', '$email', '$nname', '$nrel', '$ndate', '$refno', '$refname', '$ShareAssign');";
$result = mysqli_query($conn, $sql);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.6/dist/flowbite.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <script src="../path/to/flowbite/dist/flowbite.js"></script> -->
    <script src="https://unpkg.com/flowbite@1.4.6/dist/flowbite.js"></script>
    <title>Payment | MAAN BANK</title>
</head>

<body>

    <div class="text-center text-2xl font-bold tracking-tight text-blue-500 p-2">Scan and Pay</div>
    <div class="flex justify-center">
        <div class="p-4">
            <div class="text-center text-2xl font-bold tracking-tight text-dark-500 p-2">Amount of Share : <?php
                                                                                                            echo $ShareAssign * 10; ?></div>
        </div>
    </div>
    <form action="index.php" method="POST" class="container p-3 shadow-lg rounded mx-2 my-4">
        <div class="flex justify-center">

            <div>
                <div class="p-4 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="qrcode_21164146_.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="p-4">
                <button type="submit" name="payment" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Pay Now And Save Share Holder Details</button>
            </div>
        </div>



    </form>

</body>

</html>