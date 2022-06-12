<?php
// error_reporting(0);
include 'partials/dbconnect.php';
$shareholderNumber = 1;
$reference = false;
$sql = "SELECT * FROM `share`";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    // $shareholderNumber = $row["SHNumber"];
    $shareholderNumber++;
}
$SHNumber = "200" . $shareholderNumber;
$date = date("d-m-Y");
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
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="submit.js"></script>
    <title>Add Share Holder | MAAN BANK</title>
</head>

<body>

    <!-- <script type="text/javascript">
        var my_var = <?php echo json_encode($SHNumber); ?>;
        alert(my_var);
    </script> -->
    <script>
        setInterval(displayHello, 1000);

        function displayHello() {
            // SubmitFormData();
            // var n1 = $("#name").val();
            // alert("n1");
        }
    </script>
    <?php
    include 'navbar.php';
    ?>

    <?php
    // $bday = new DateTime('21.04.1963'); // Your date of birth
    // $today = new Datetime(date('m.d.y'));
    // $diff = $today->diff($bday);
    // printf(' Your age : %d years', $diff->y);
    // if ($diff->y >= 60) {
    //     echo("RATE Of interenst is increment by .5%");
    // }
    // printf("\n");
    ?>
    <div class="text-center text-2xl font-bold tracking-tight text-blue-500 p-2">Add New Share Holder</div>
    <div class="flex justify-center">

        <form action="payment.php" method="POST" class="container p-3  my-4">
            <div class="  p-2 my-4">
                <div class="text-left text-2xl font-bold tracking-tight text-dark-500 mb-4">Personal Details</div>
                <div class="grid gap-6  lg:grid-cols-2 ">
                    <div class="mb-6">
                        <label for="SHNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">RD Account Number</label>
                        <input type="number" id="SHNumber" name="SHNumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $SHNumber; ?>" required="">
                    </div>
                    <!-- <div class="mb-6"></div> -->
                    <div class="mb-6">
                        <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date</label>
                        <input type="text" id="date" name="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $date; ?>" required="">
                    </div>
                </div>
                <div class="grid gap-6 lg:grid-cols-2">
                    <div class="mb-6">
                        <label for="SHNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Share Holder Number</label>
                        <div class="grid gap-2 lg:grid-cols-2">
                            <div class=""> <input type="number" id="shnum" name="shnum" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-75 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required=""></div>
                            <div class=""><input type="button" id="submitFormData" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="SubmitFormData();" value="Search"></div>
                        </div>
                    </div>
                    <!-- <div class="mb-6"></div> -->
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Share Holder Name</label>
                        <div id="results" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            Name of Share Holder
                        </div>
                        <!-- <input type="name" id="results" name="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required=""> -->
                    </div>
                </div>

                <!-- <div class="mb-6">
                    <form id="myForm" method="post">
                    SHnumber: <input name="shnum" id="shnum" type="text" /><br />
                    <input type="button" id="submitFormData" onclick="SubmitFormData();" value="Search" />
                    </form>

                </div>

                <div class="mb-6" id="results">
                     All data will display here  
                </div> -->


                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">RD ammount</label>
                    <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John Doe" required="Please enter the name of the share Holder">
                </div>
                <div class="mb-6">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Address</label>
                    <input type="text" id="add" name="add" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Address of the share Holder" required="">
                </div>
                <div class="grid gap-6 mb-6  lg:grid-cols-2 ">
                    <div>
                        <label for="DOB" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date Of Birth</label>
                        <input type="date" id="DOB" name="DOB" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Date Of Bitrh" required="">
                    </div>
                </div>
                <div class="grid gap-6 mb-6  lg:grid-cols-2 ">
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mobile number</label>
                        <input type="tel" id="phone" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="+91 1234567890" required="">
                    </div>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email address</label>
                    <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com">
                </div>
            </div>
            <div class="   p-2 my-4">
                <div class="text-left text-2xl font-bold tracking-tight text-dark-500 mb-4">Nominee Details</div>
                <div class="mb-6">
                    <label for="nname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nominee Name</label>
                    <input type="text" id="nname" name="nname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required="">
                </div>
                <div class="grid gap-6  lg:grid-cols-2 ">
                    <div class="mb-6">
                        <label for="nrel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nominee Relation</label>
                        <input type="text" id="nrel" name="nrel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Husband" required="">
                    </div>
                    <!-- <div class="mb-6"></div> -->
                    <div class="mb-6">
                        <label for="ndate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nominee Birth Date</label>
                        <input type="date" id="ndate" name="ndate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nominee Birth Date">
                    </div>
                </div>
            </div>
            <div class=" p-2 my-4">
                <div class="text-left text-2xl font-bold tracking-tight text-dark-500 mb-4">Reference Details</div>
                <div class="grid gap-6 mb-6  lg:grid-cols-2 ">
                    <div>
                        <label for="Share Assign" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Reference Share No.</label>
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="refno">
                            <!-- <option>United States</option> -->
                            <option value="1001">1001</option>
                            <option value="1002">1002</option>
                            <option value="1003">1003</option>
                        </select>
                    </div>
                    <div>
                        <label for="SharePrice" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Reference Share Holder Name</label>
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="refname">
                            <!-- <option>United States</option> -->
                            <option value="Atul Gawali">Atul Gawali</option>
                            <option value="Dr. Dilip Dwarakanath Kukkar">Dr. Dilip Dwarakanath Kukkar </option>
                            <option value="Minakshi Khairnar">Minakshi Khairnar </option>
                        </select>
                    </div>

                </div>
            </div>
            <div class="p-2 my-4">
                <div class="text-left text-2xl font-bold tracking-tight text-dark-500 mb-4">Share Details</div>
                <div class="grid gap-6 mb-6  lg:grid-cols-2 ">
                    <div>
                        <label for="Share Assign" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Share Assign</label>
                        <input type="number" id="ShareAssign" name="ShareAssign" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Number of shares to assign" required="">
                    </div>
                    <div>
                        <label for="shareprice" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">share Price</label>
                        <input type="text" id="shareprice" name="shareprice" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="10" disabled vlaue="10">
                    </div>

                </div>
            </div>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Procced For Payment</button>

        </form>
    </div>

</body>

</html>