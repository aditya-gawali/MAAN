<?php
// error_reporting(0);

include 'partials/dbconnect.php';
$shareholder = 0;
$sharesold = 0;
$sharesoldprice = 0;
$ss = 0;
$ssp = 0;
$sspm = 0;

$sql = "SELECT * FROM `share`";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $shareholder++;
    $ss = $row["shares"];
    $ssp = $row["shares"];
    $sspm = $ssp * 10;
    $sharesold += $ss;
    $sharesoldprice += $sspm;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.6/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.4.6/dist/flowbite.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

    <style>
        body {
            font-family: 'Noto Sans', sans-serif;
        }

        #logo_name {
            font-family: "Audiowide", sans-serif;
            text-shadow: 3px 3px 3px #ababab;

        }
    </style>
    <title>MAAN BANK</title>
</head>

<body>

    <?php
    include 'navbar.php';
    ?>
    <div class="grid grid-cols-1 gap-3 place-content-center md:grid-cols-4 gap-6 place-content-center p-10 ">

        <div>
            <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 hover:shadow-2xl">

                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Share Price</h5>
                    <p class="mb-3 font-normal text-gray-700 ">₹ 10</p>
                </div>
            </a>
        </div>
        <div>
            <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 ">

                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Share Holder</h5>
                    <p class="mb-3 font-normal text-gray-700 "><?php
                                                                echo $shareholder;
                                                                ?></p>
                </div>
            </a>
        </div>
        <div>

            <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 ">

                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Shares Sold</h5>
                    <p class="mb-3 font-normal text-gray-700 "><?php
                                                                echo $sharesold;
                                                                ?></p>
                </div>
            </a>

        </div>
        <div>

            <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 ">

                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Share sold price
                    </h5>
                    <p class="mb-3 font-normal text-gray-700 ">₹ <?php
                                                                    echo $sharesoldprice;
                                                                    ?></p>
                </div>
            </a>

        </div>

    </div>
    <div class="grid grid-cols-1 gap-3 sm:grid-cols-3 gap-6 place-content-center p-10">
        <div id="account">
            <div class="max-w-sm bg-white rounded-xl border border-gray-200 shadow-inner hover:shadow-2xl hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="h-30 rounded-t-lg" src="https://kalfalaw.com/wp-content/uploads/2019/07/shareholders-agreement-clause.jpg" alt="">
                </a>
                <div class="p-5">
                    <a href="share_holder.php">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Add New Share
                            Holder</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here you are able to add new share holder to MAAN LTD.</p>
                    <a href="share_holder.php" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Add New Share Holder
                    </a>
                </div>
            </div>
        </div>
        <div>
            <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-inner hover:shadow-2xl hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="h-45 rounded-t-lg " src="https://okcredit-blog-images-prod.storage.googleapis.com/2020/12/RD-3.jpg" alt="">
                </a>

                <div class="p-5 ">
                    <a href="share_holder.php">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Add New RD
                            Account</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here you are able to add new RD Account to MAAN LTD.</p>
                    <a href="rd_account.php" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Add New RD Account
                    </a>
                </div>
            </div>
        </div>
        <div>
            <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-inner hover:shadow-2xl hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class=" rounded-t-lg" src="https://ajabgajabjankari.com/wp-content/uploads/2018/03/fixed-deposit-account.jpg" alt="">
                </a>
                <div class="p-5 mt-4 ">
                    <a href="share_holder.php">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Add New FD
                            Account</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here you are able to add new FD Account to MAAN LTD.</p>
                    <a href="share_holder.php" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Add New FD Account
                    </a>
                </div>
            </div>
        </div>
        <div id="report">
            <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-inner hover:shadow-2xl hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="https://media.istockphoto.com/photos/document-management-concept-picture-id1316326058?b=1&k=20&m=1316326058&s=170667a&w=0&h=Y0x-cK3i5VLH30704z5GpUaOyAENTr5Sh_Yn9C1ZvUE=" alt="">
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Share Holder Report</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here You are able to see all data about share holders added to the Bank.</p>
                    <a href="SHReport.php" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Get Share Report
                    </a>
                </div>
            </div>

        </div>
        <div>
            <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-inner hover:shadow-2xl hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="https://media.istockphoto.com/photos/document-management-concept-picture-id1316326058?b=1&k=20&m=1316326058&s=170667a&w=0&h=Y0x-cK3i5VLH30704z5GpUaOyAENTr5Sh_Yn9C1ZvUE=" alt="">
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">RD Account Report</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here You are able to see all data about RD Account added to the Bank.</p>
                    <a href="SHReport.php" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Get RD Report
                    </a>
                </div>
            </div>

        </div>
        <div>
            <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-inner hover:shadow-2xl hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="https://media.istockphoto.com/photos/document-management-concept-picture-id1316326058?b=1&k=20&m=1316326058&s=170667a&w=0&h=Y0x-cK3i5VLH30704z5GpUaOyAENTr5Sh_Yn9C1ZvUE=" alt="">
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">FD Account Report</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here You are able to see all data about FD Account added to the Bank.</p>
                    <a href="SHReport.php" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Get FD Report
                    </a>
                </div>
            </div>

        </div>
    </div>

    <?php
    include 'footer.php';
    ?>

</body>

</html>