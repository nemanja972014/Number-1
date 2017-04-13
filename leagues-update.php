<?php
include_once ('header.php');
include_once ('global.php');

$q = loadArray('SELECT *
    FROM leagues WHERE id=' . $_GET['id']);
$r = $q->fetch();

if(isset($_POST['update'])) {
    dbExecute('UPDATE league SET name=?, full_name=?, since=? WHERE id=?', array($_POST['name'], $_POST['full_name'], $_POST['since'], $_GET['id']));
}
?>

<div class="container">
    <h2>Update league</h2>
    <form action="" method="post">
        <div class="form-group">
            <label>name</label>
            <input name="name" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label>full name</label>
            <input name="full_name" class="form-control" id="full_name">
        </div>
        <div class="form-group">
            <label>since</label>
            <input name="since" class="form-control" id="since">
        </div>
        <p><button type="submit" name="update" class="btn btn-success" value="<?php echo htmlspecialchars($r['id']);?>">Update</button></p>
    </form>
</div>
