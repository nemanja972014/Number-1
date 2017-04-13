<!DOCTYPE html>
<html>

<?php
include_once('header.php');
include_once('global.php');

$q = loadArray('SELECT * FROM leagues ORDER BY name');

if (isset($_POST['submit'])) {
    dbExecute('INSERT INTO leagues (name, full_name, since)
    VALUES (?, ?, ?)', array($_POST['name'], $_POST['full_name'], $_POST['since']));
};

if(isset($_POST['delete'])) {
    dbExecute('DELETE FROM leagues WHERE id=?', array($_POST['delete_id']));
};
?>

<body class="basket">

<div class="container">
    <h2>Leagues</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Full name</th>
            <th>Since</th>
            <th>Edit</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php while ($r = $q->fetch()): ?>
        <tr>
            <td><a href="leagues-view.php?league_id=<?php echo htmlspecialchars($r['id']); ?>"><?php echo htmlspecialchars($r['name']); ?></a></td>
            <td><?php echo htmlspecialchars($r['full_name']); ?></td>
            <td><?php echo htmlspecialchars($r['since']); ?></td>
            <td><a href="leagues-update.php?id=<?php echo htmlspecialchars($r['id']); ?>"><button type="button" class="btn btn-warning">change</button></a></td>
            <form action="leagues.php" method="post">
                <input type="hidden" name="delete_id" value="<?php echo htmlspecialchars($r['id']);?>">
                <td><button type="delete" name="delete" class="btn btn-danger">delete</button></td>
            </form>
        </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>


<div class="container">
    <h2>New league</h2>
<form action="leagues.php" method="post">
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
    <p><input type="submit" class="btn btn-info" name="submit" value="Submit"></p>
</form>
</div>
</body>
</html>
