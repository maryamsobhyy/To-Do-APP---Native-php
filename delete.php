<?php
function deleteRow($table, $jsonFile, $rowId) {
    // قراءة الملف JSON وتحويله إلى مصفوفة
    $jsonData = file_get_contents($jsonFile);
    $data = json_decode($jsonData, true);

    // حذف الصف من المصفوفة
    unset($data[$table][$rowId]);

    // تحويل المصفوفة إلى JSON وكتابتها في الملف
    $jsonData = json_encode($data);
    file_put_contents($jsonFile, $jsonData);
}

deleteRow('users', 'data.json', 1);

?>