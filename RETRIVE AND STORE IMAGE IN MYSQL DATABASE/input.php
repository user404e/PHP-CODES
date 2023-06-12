<?php
    if(isset($_FILES['image'])){
        echo "<pre>";
        print_r($_FILES['image']);
        echo "<pre>";
    }
?>

<html>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image"> <br><br>

        <input type="submit">
    </form>
</body>
</html>