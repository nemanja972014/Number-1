<!DOCTYPE html>
<html lang="en">

<?php

include_once('header.php');
include_once('global.php');

$q = loadArray('SELECT * FROM teams ORDER BY name');

if (isset($_POST['submit'])) {
    dbExecute('INSERT INTO teams (name, city, nation, league_id)
    VALUES (?, ?, ?, ?)', array($_POST['name'], $_POST['city'], $_POST['nation'], $_POST['league_id']));
};

if(isset($_POST['delete'])) {
    dbExecute('DELETE FROM teams WHERE id=?', array($_POST['delete_id']));
}

$x = loadArray('SELECT * FROM leagues ORDER BY name');

$optionsString = '';
while ($w = $x->fetch()){
    $optionsString .= '<option value="' . $w['id'] . '">' . htmlspecialchars($w['name']) . '</option>';
}

?>

<body>

<div class="container">
<h2>Teams</h2>
<table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>City</th>
        <th>Nation</th>
        <th>Edit</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php while ($r = $q->fetch()): ?>
        <tr>
            <td><a href="teams-view.php?id=<?php echo htmlspecialchars($r['id']); ?>"><?php echo htmlspecialchars($r['name']); ?></a></td>
            <td><?php echo htmlspecialchars($r['city']); ?></td>
            <td><?php echo htmlspecialchars($r['nation']); ?></td>
            <td><a href="teams-update.php"><button type="button" class="btn btn-warning">change</button></a></td>
            <form action="" method="post">
                <input type="hidden" name="delete_id" value="<?php echo htmlspecialchars($r['id']);?>">
                <td><button type="delete" name="delete" class="btn btn-danger">delete</button></td>
            </form>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>
</div>

<div class="container">
    <h2>New team</h2>
    <form action="teams.php" method="post">
        <div class="form-group">
            <label>name</label>
            <input name="name" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label>city</label>
            <input name="city" class="form-control" id="city">
        </div>
        <div class="form-group">
            <label>nation</label>
            <input name="nation" class="form-control" id="nation">
        </div>
        <div class="form-group">
            <label>league</label>
            <select name="league_id" class="form-control" id="league_id">
                <?php echo $optionsString; ?>
            </select>
        </div>
        <p><input type="submit" class="btn btn-info" name="submit" value="Submit"></p>
    </form>
</div>

</body>
</html>
