<?php
    require_once "./admin/dao/pdo.php";

    if(isset($_POST['submit'])) {
        $content = $_POST['content'];

        $sql = "insert into test set content = '$content'";
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        echo "<script>alert('" .  $conn->lastInsertId() .  "');</script>"; 
        header("location:./ck.php");
    }

    $sql = "select * from test";
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $content = $stmt->fetchAll();
      echo "<script>alert('" .  $conn->lastInsertId() .  "');</script>"; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CKEditor 5 - Classic editor</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>
</head>
<body>
    <h1>Classic editor</h1>
    <form  method="post">
        <textarea name="content" id="editor">
        </textarea>
        <input type="submit" value="Submit" name="submit">
    </form>

    <div class="content">
        <?php foreach ($content as $value) : ?>
            <?php echo $value['content'] ?>
        <?php endforeach ; ?>
    </div>


    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</body>
</html>