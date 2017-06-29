<?php
while ($row = mysqli_fetch_assoc($result)) {
    $subcat = $row['subcategory'];
    $cat = $row['category'];
    $link = '/mdse.php?cat='.$cat.'&'.'subcat='.$subcat;
    echo "<li><a href='$link'>$subcat</a></li>";
}
?>