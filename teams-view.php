<!DOCTYPE html>
<html lang="en">
<?php

include_once ('header.php');
include_once ('global.php');
$q = loadArray('SELECT  players.number, players.first_name, players.last_name, players.age
            FROM players  LEFT OUTER JOIN teams
            ON players.team_id = teams.id WHERE teams.id=?
            ORDER BY players.number', array($_GET['id']));

$x = loadArray('SELECT * FROM teams WHERE id=?', array($_GET['id']));

?>

<body>

<div class="col-sm-3">
    <div class="container-fluid">
        <h2>Players</h2>
        <table class="table">
            <thead>
            <tr>
                <th>number</th>
                <th>first name</th>
                <th>last name</th>
                <th>age</th>
            </tr>
            </thead>
            <tbody>
            <?php while ($r = $q->fetch()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($r['number']); ?></td>
                    <td><?php echo htmlspecialchars($r['first_name']); ?></td>
                    <td><?php echo htmlspecialchars($r['last_name']); ?></td>
                    <td><?php echo htmlspecialchars($r['age']); ?></td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="col-sm-9">
    <div class="text-center">
        <?php while ($y = $x->fetch()): ?>
            <h1><?php echo htmlspecialchars($y['name']); ?></h1>
        <?php endwhile; ?>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <a>
            <div class="well">
                <h3>Games</h3>
            </div>
            </a>
        </div>
        <div class="col-sm-3">
            <a>
            <div class="well">
                <h3>Curent game</h3>
            </div>
            </a>
        </div>
        <div class="col-sm-3">
            <a>
            <div class="well">
                <h3>Last game</h3>
            </div>
            </a>
        </div>
        <div class="col-sm-3">
            <a>
            <div class="well">
                <h3>Next game</h3>
            </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="well">
                <p>Text</p>
                <p>Text</p>
                <p>Text</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="well">
                <p>Text</p>
                <p>Text</p>
                <p>Text</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="well">
                <p>Text</p>
                <p>Text</p>
                <p>Text</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <div class="well">
                <p>Text</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="well">
                <p>Text</p>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</body>

</html>