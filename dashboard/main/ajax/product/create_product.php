<?php
require_once '../../../../datab.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    $product_color = $_POST["product_color"];
    $product_size = $_POST["product_size"];
    $product_description = $_POST["product_description"];

    $insertProduct = mysqli_query($conn, "INSERT INTO product_data (product_name, product_price, product_color, product_size, product_desc, status, dateTime)
                                        VALUES ('$product_name', $product_price, '$product_color', '$product_size', '$product_description', 'Active', NOW())");

    if ($insertProduct) {
        $product_id = mysqli_insert_id($conn);

        // Main image
        if (isset($_FILES["main_Img"]) && $_FILES["main_Img"]["error"] == UPLOAD_ERR_OK) {
            $mainImageName = $_FILES["main_Img"]["name"];
            $mainImagePath = '../../../../product_images/' . $product_id . '/main/' . $mainImageName;
            
            // Ensure the directory exists
            $mainImageDirectory = '../../../../product_images/' . $product_id . '/main/';
            if (!is_dir($mainImageDirectory)) {
                mkdir($mainImageDirectory, 0777, true);
            }

            if (move_uploaded_file($_FILES["main_Img"]["tmp_name"], $mainImagePath)) {
                // Insert the main image path and product association into the "product_images" table
                $insertMainImage = mysqli_query($conn, "INSERT INTO product_images (product_id, product_img, img_category, status, dateTime)
                                                     VALUES ($product_id, '$mainImageName', 'main', 'Active', NOW())");
            }
        }

        for ($i = 0; $i < count($_FILES); $i++) {
            $additionalImageKey = "additionalImage" . $i;

            if (isset($_FILES[$additionalImageKey]) && $_FILES[$additionalImageKey]["error"] == UPLOAD_ERR_OK) {
                $additionalImageName = $_FILES[$additionalImageKey]["name"];
                $additionalImagePath = '../../../../product_images/' . $product_id . '/alt/' . $additionalImageName;

                $additionalImageDirectory = '../../../../product_images/' . $product_id . '/alt/';
                if (!is_dir($additionalImageDirectory)) {
                    mkdir($additionalImageDirectory, 0777, true);
                }

                if (move_uploaded_file($_FILES[$additionalImageKey]["tmp_name"], $additionalImagePath)) {
                    // Insert the additional image path and product association into the "product_images" table
                    $insertAdditionalImage = mysqli_query($conn, "INSERT INTO product_images (product_id, product_img, img_category, status, dateTime)
                    VALUES ($product_id, '$additionalImageName', 'alt', 'Active', NOW())");
                }
            }
        }

        if (isset($insertMainImage) && isset($insertAdditionalImage) && $insertMainImage && $insertAdditionalImage) {
            $res['status'] = 'Success';
            $res['remarks'] = 'Product Created';
        } else {
            $res['status'] = 'Failed';
            $res['remarks'] = 'Error Inserting Image into Database';
        }
    }
} else {
    $res['status'] = 'Failed';
    $res['remarks'] = 'Unable to Create Product';
}

echo json_encode($res);
?>
