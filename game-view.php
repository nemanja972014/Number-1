<?php

include_once ('header.php');
include_once ('global.php');

$q = loadArray('SELECT * FROM games WHERE id=?', array($_GET['game_id']));
$f = loadArray('SELECT * FROM games WHERE id=?', array($_GET['game_id']));
$w = loadArray('SELECT name FROM teams WHERE id=?', array($_GET['home_id']));
$e = loadArray('SELECT name FROM teams WHERE id=?', array($_GET['away_id']));
$z = loadArray('SELECT  players.number, players.first_name, players.last_name
            FROM players  LEFT OUTER JOIN games
            ON players.team_id = games.home_id WHERE players.team_id = ?
            ORDER BY players.number', array($_GET['home_id']));
$c = loadArray('SELECT  players.number, players.first_name, players.last_name
            FROM players  LEFT OUTER JOIN games
            ON players.team_id = games.away_id WHERE players.team_id = ?
            ORDER BY players.number', array($_GET['away_id']));

?>
<h2>Game and stats</h2>
<div class="well">
    <table class="table">
        <thead>
        <tr>
            <th>Team</th>
            <th>Q1</th>
            <th>Q2</th>
            <th>Q3</th>
            <th>Q4</th>
            <th>Score</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php while ($a = $w->fetch()): ?>
            <th><?php echo htmlspecialchars($a['name']); ?></th>
            <?php endwhile; ?>
            <?php while ($r = $q->fetch()): ?>
            <th><?php echo htmlspecialchars($r['home_q1']); ?></th>
            <th><?php echo htmlspecialchars($r['home_q2']); ?></th>
            <th><?php echo htmlspecialchars($r['home_q3']); ?></th>
            <th><?php echo htmlspecialchars($r['home_q4']); ?></th>
            <th><?php echo htmlspecialchars($r['home_score']); ?></th>
            <?php endwhile; ?>
        </tr>
        <tr>
            <?php while ($s = $e->fetch()): ?>
            <th><?php echo htmlspecialchars($s['name']); ?></th>
            <?php endwhile; ?>
            <?php while ($d = $f->fetch()): ?>
            <th><?php echo htmlspecialchars($d['away_q1']); ?></th>
            <th><?php echo htmlspecialchars($d['away_q2']); ?></th>
            <th><?php echo htmlspecialchars($d['away_q3']); ?></th>
            <th><?php echo htmlspecialchars($d['away_q4']); ?></th>
            <th><?php echo htmlspecialchars($d['away_score']); ?></th>
            <?php endwhile; ?>
        </tr>
        </tbody>
    </table>
</div>

<div>
    <table>
       <thead>
        <tr>
            <td>Number</td>
            <td>First name</td>
            <td>Last name</td>
            <td>Minutes</td>
            <td>Free trow</td>
            <td>Field goal</td>
            <td>3 point shoot</td>
        </tr>
       </thead>
        <tbody>
        <tr>
            <?php while ($x = $z->fetch()): ?>
                <td><?php echo htmlspecialchars($x['number']); ?></td>
                <td><?php echo htmlspecialchars($x['first_name']); ?></td>
                <td><?php echo htmlspecialchars($x['last_name']); ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
        </tr>
             <?php endwhile; ?>
        </tbody>
    </table>
</div>