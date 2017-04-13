<!DOCTYPE html>
<html lang="en">
<?php
$i = 1;
include_once ('global.php');
include_once ('header.php');
$q = loadArray('SELECT  teams.name, teams.id
            FROM teams  LEFT OUTER JOIN leagues
            ON teams.league_id = leagues.id WHERE teams.league_id = ?
            ORDER BY teams.name', array($_GET['league_id']));

$x = loadArray('SELECT * FROM leagues WHERE id=?', array($_GET['league_id']));


?>


<body class="basket">
<div class="col-sm-3">
    <div class="container-fluid">
            <h2>Table</h2>
            <table class="table">
                <thead>
                <tr>
                    <th>rank</th>
                    <th>team</th>
                    <th>win</th>
                    <th>loss</th>
                    <th>pts</th>
                </tr>
                </thead>
                <tbody>
                <?php while ($r = $q->fetch()): ?>
                <tr>
                    <td><?php echo $i; $i++; ?></td>
                    <td><a href="teams-view.php?id=<?php echo htmlspecialchars($r['id']); ?>"><?php echo htmlspecialchars($r['name']); ?></a></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <?php endwhile; ?>
                </tr>
                </tbody>
            </table>
    </div>
</div>

        <div class="col-sm-9">
            <div class="text-center">
                <?php while ($y = $x->fetch()): ?>
                <h1><?php echo htmlspecialchars($y['full_name']); ?></h1>
                <?php endwhile; ?>
            </div>
            <div class="row">
                <div class="col-sm-4 well">
                    <a href="game-view.php?game_id=1&home_id=3&away_id=5">
                        <div class="form-group">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Team</th>
                                    <th>Score</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <label for="sel1">Home</label>
                                    </td>
                                    <td>
                                        <select class="form-control" id="sel1">
                                            <?php echo $optionsString; ?>
                                        </select>
                                    </td>
                                    <td class="width"><input type="number" class="form-control" id="home_score"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="sel1">Away</label>
                                    </td>
                                    <td>
                                        <select class="form-control" id="sel1">
                                            <?php echo $optionsString; ?>
                                        </select>
                                    </td>
                                    <td class="width"><input type="number" class="form-control" id="away_score"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a>
                    <div class="well">
                        <h3>Next round</h3>
                    </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a>
                    <div class="well">
                        <h3>Previous round</h3>
                    </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="well">
                        <h3>Stats</h3>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="well">
                        <h3>Team stats</h3>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="well">
                        <h3>Individual stats</h3>
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

</body>
</html>