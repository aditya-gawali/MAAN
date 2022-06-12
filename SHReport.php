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
    <title>Share Holder Report | MAAN BANK</title>
    <style>
        @keyframes slideInLeft {
            0% {
                transform: translateX(-50%);
            }

            100% {
                transform: translateX(0);
            }
        }

        #slideDown {
            animation-duration: 1s;
            animation-timing-function: ease-in-out;
            /* animation-delay: 0s; */
            /* animation-iteration-count: 1; */
            animation-name: slideInLeft;
        }
    </style>
</head>

<body style="background-color: white; transition: all 2s ease-in;">

    <div class="text-center text-2xl font-bold tracking-tight text-blue-500 p-2">Report of Share Holder</div>
    <div class="p-1" id="slideDown">
        <div class="p-4">
            <div class="relative overflow-x-auto shadow-lg sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                SRN
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Share Holder Number
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Share Assign
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Share Assign Amount
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Share Assign From - TO
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // error_reporting(0);
                        include 'partials/dbconnect.php';
                        $srn = 0;
                        $SHNumber;
                        $name;
                        $dash = " - ";
                        $shareAssign;
                        $sharefrom = 0;
                        $shareto = 0;
                        $sharefromto;

                        $sql = "SELECT * FROM `share`";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            $srn++;
                            $SHNumber = $row["shareHolderNumber"];
                            // $SHN = $SHNumber;
                            $name = $row["name"];
                            $shareAssign = $row["shares"];
                            if ($SHNumber == 1) {
                                $sharefrom = 1;
                                $shareto = $shareAssign;
                            } else {
                                $sharefrom = $shareto + 1;
                                $shareto += $shareAssign;
                            }

                            $sharefromto = $sharefrom . " " . $dash . " " . $shareto;

                            echo '<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                ' . $srn .  '
                            </th>
                            <td class="px-6 py-4">
                            ' . $SHNumber .  '
                            </td>
                            <td class="px-6 py-4">
                            ' . $name .  '
                            </td>
                            <td class="px-6 py-4">
                            ' . $shareAssign .  '
                            </td>
                            <td class="px-6 py-4">
                            ' . $shareAssign * 10 .  '
                            </td>
                            <td class="px-6 py-4">
                            ' . $sharefromto . '
                            </td>
                            
                        </tr>';
                        }
                        ?>

                    </tbody>
                </table>
            </div>

        </div>
    </div>

</body>

</html>