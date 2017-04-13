<!DOCTYPE html>
<html lang="en">
<?php
include_once('header.php');
include_once('global.php');
$q = loadArray('SELECT * FROM players ORDER BY first_name');

if (isset($_POST['submit'])) {
    dbExecute('INSERT INTO players (number, first_name, last_name, position, age, team_id)
    VALUES (?, ?, ?, ?, ?, ?)', array($_POST['number'], $_POST['first_name'], $_POST['last_name'], $_POST['position'], $_POST['age'], $_POST['team_id']));
};

if(isset($_POST['delete'])) {
    dbExecute('DELETE FROM players WHERE id=?', array($_POST['delete_id']));
}

$x = loadArray('SELECT * FROM teams ORDER BY name');

$optionsString = '';
while ($w = $x->fetch()){
    $optionsString .= '<option value="' . $w['id'] . '">' . htmlspecialchars($w['name']) . '</option>';
}

?>
<body>

<div class="container">
    <h2>Players</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Number</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Position</th>
            <th>Age</th>
            <th>edit</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($r = $q->fetch()): ?>
            <tr>
                <td><?php echo htmlspecialchars($r['number']); ?></td>
                <td><?php echo htmlspecialchars($r['first_name']); ?></td>
                <td><?php echo htmlspecialchars($r['last_name']); ?></td>
                <td><?php echo htmlspecialchars($r['position']); ?></td>
                <td><?php echo htmlspecialchars($r['age']); ?></td>
                <td><a href="players-update.php"><button type="button" class="btn btn-warning">change</button></a></td>
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
    <h2>New player</h2>
    <form action="players.php" method="post">
        <div class="form-group">
            <label>number</label>
            <input name="number" class="form-control" id="number">
        </div>
        <div class="form-group">
            <label>first name</label>
            <input name="first_name" class="form-control" id="first_name">
        </div>
        <div class="form-group">
            <label>last name</label>
            <input name="last_name" class="form-control" id="last_name">
        </div>
        <div class="form-group">
            <label>position</label>
            <input name="position" class="form-control" id="position">
        </div>
        <div class="form-group">
            <label>age</label>
            <input name="age" class="form-control" id="age">
        </div>
        <div class="form-group">
            <label>team</label>
            <select name="team_id" class="form-control" id="team_id">
                <?php echo $optionsString; ?>
            </select>
        </div>
        <input type="submit" class="btn btn-info" name="submit" value="Submit">
    </form>
</div>

</body>
</html>