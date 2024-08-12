<?php
    include ("NavigationBar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/adPage.css">
</head>
<body>
    <div class="adPage">
        <div>
            <?php
                include ("sideMenu.php");
            ?>
        </div>
        <div class="ad">
            <div class="landImage">
                <img src="../Resource/Images/Rectangle%2022.png" alt="land_image" />
            </div>
            <div class="ownerDet">
                <h3>Owner Details</h3>
                <p><img src="../Resource/Icons/user_9833273.png" rel="user" class="icon" /><span>Kamal Peris</span></p>
                <p><img src="../Resource/Icons/telephone_2901648.png"  rel="telephone" class="icon" /><span>0775869324</span></p>
            </div>
            <div class="landDet">
                <h2>Land Title</h2>
                <p><img src="../Resource/Icons/location_9014145.png" rel="location" class="icon" /><span>Weeraketiya, Hambantota, Southern</span></p>
                <p><img src="../Resource/Icons/land_size_5297774.png"  rel="land_size" class="icon" /><span>40 Acres</span></p>
                <p class="price">Rs. 22,000,000</p>
                <p class="description">For sale: Prime coconut land available, perfect for agriculture or investment. Lush, well-maintained, and ready for cultivation. Don't miss this opportunity!</p>
            </div>
        </div>
    </div>
</body>
</html>