<?php
require_once './data/employeInfo.php';
?>

<div class="container mx-auto p-4">
    <table class="w-full border-collapse border border-gray-300 shadow-lg rounded-lg">
        <thead>
            <tr class="bg-gray-200 text-gray-700">
                <th class="px-4 py-2 border border-gray-300 text-left">Surname Name</th>
                <th class="px-4 py-2 border border-gray-300 text-left">Time of work</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employeeInfo as $name => $surname): ?>
                <tr class="border border-gray-300 hover:bg-gray-100">
                    <td class="px-4 py-2 border border-gray-300 font-semibold">
                        <?php echo $name . " " . $surname ?>
                    </td>
                    <td class="px-4 py-2 border border-gray-300 text-gray-600">
                        <?php calculateEmployee($name, $surname, $currentDay, $janeWorkDays, $johnWorkDays) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>