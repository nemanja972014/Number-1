<?php

include_once ('global.php');
include_once ('header.php');

$g = loadArray('SELECT * FROM teams WHERE league_id=?', array($_GET['league_id']));

$optionsString = '';
while ($w = $g->fetch()){
    $optionsString .= '<option value="' . $w['id'] . '">' . htmlspecialchars($w['name']) . '</option>';
}

if (isset($_POST['submit'])) {
    dbExecute('INSERT INTO games (round, home_id, away_id, home_q1, away_q1, home_q2, away_q2, home_q3, away_q3, home_q4, away_q4, home_score, away_score)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', array($_POST['round'], $_POST['home_id'], $_POST['away_id'], $_POST['home_q1'], $_POST['away_q1'], $_POST['home_q2'], $_POST['away_q2'], $_POST['home_q3'], $_POST['away_q3'], $_POST['home_q4'], $_POST['away_q4'], $_POST['home_score'], $_POST['away_score']));
};

?>

<div class="row">
    <div class="col-sm-6">
        <h2>Add game</h2>
        <form action="leagues-view.php?league_id=<?php echo htmlspecialchars($r['id']); ?>" method="post">
            <div class="form-group">
                <label for="round">round</label>
                <select name="round" class="form-control" id="round">
                    <?php for($i = 1; $i < 27; $i++) {
                        echo '<option value="' . $i . '">' . $i . '</option>';
                    } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="home_id">home</label>
                <select name="home_id" class="form-control" id="home_id">
                    <?php echo $optionsString; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="away_id">away</label>
                <select name="away_id" class="form-control" id="away_id">
                    <?php echo $optionsString; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="home_q1">home q1</label>
                <input type="number" name="home_q1" class="form-control" id="home_q1">
            </div>
            <div class="form-group">
                <label for="away_q1">away q1</label>
                <input type="number" name="away_q1" class="form-control" id="away_q1">
            </div>
            <div class="form-group">
                <label for="home_q2">home q2</label>
                <input type="number" name="home_q2" class="form-control" id="home_q2">
            </div>
            <div class="form-group">
                <label for="away_q2">away q2</label>
                <input type="number" name="away_q2" class="form-control" id="away_q2">
            </div>
            <div class="form-group">
                <label for="home_q3">home q3</label>
                <input type="number" name="home_q3" class="form-control" id="home_q3">
            </div>
            <div class="form-group">
                <label for="q3">away q3</label>
                <input type="number" name="away_q3" class="form-control" id="q3">
            </div>
            <div class="form-group">
                <label for="home_q4">home q4</label>
                <input type="number" name="home_q4" class="form-control" id="home_q4">
            </div>
            <div class="form-group">
                <label for="away_q4">away q4</label>
                <input type="number" name="away_q4" class="form-control" id="away_q4">
            </div>
            <div class="form-group">
                <label for="home_score">home score</label>
                <input type="number" name="home_score" class="form-control" id="home_score">
            </div>
            <div class="form-group">
                <label for="away_score">away score</label>
                <input type="number" name="away_score" class="form-control" id="away_score">
            </div>
            <input type="submit" class="btn btn-default" name="submit" value="Submit">
        </form>
    </div>
    <div class="col-sm-6">
        <h2>Add game stats</h2>
        <form action="leagues-view.php?league_id=<?php echo htmlspecialchars($r['id']); ?>" method="post">
            <div class="form-group">
                <label for="round">number</label>
                <select name="number" class="form-control" id="number">
                    <?php for($i = 0; $i < 100; $i++) {
                        echo '<option value="' . $i . '">' . $i . '</option>';
                    } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="home_id">home</label>
                <select name="home_id" class="form-control" id="home_id">
                    <?php echo $optionsString; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="away_id">away</label>
                <select name="away_id" class="form-control" id="away_id">
                    <?php echo $optionsString; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="home_q1">home q1</label>
                <input type="number" name="home_q1" class="form-control" id="home_q1">
            </div>
            <div class="form-group">
                <label for="away_q1">away q1</label>
                <input type="number" name="away_q1" class="form-control" id="away_q1">
            </div>
            <div class="form-group">
                <label for="home_q2">home q2</label>
                <input type="number" name="home_q2" class="form-control" id="home_q2">
            </div>
            <div class="form-group">
                <label for="away_q2">away q2</label>
                <input type="number" name="away_q2" class="form-control" id="away_q2">
            </div>
            <div class="form-group">
                <label for="home_q3">home q3</label>
                <input type="number" name="home_q3" class="form-control" id="home_q3">
            </div>
            <div class="form-group">
                <label for="q3">away q3</label>
                <input type="number" name="away_q3" class="form-control" id="q3">
            </div>
            <div class="form-group">
                <label for="home_q4">home q4</label>
                <input type="number" name="home_q4" class="form-control" id="home_q4">
            </div>
            <div class="form-group">
                <label for="away_q4">away q4</label>
                <input type="number" name="away_q4" class="form-control" id="away_q4">
            </div>
            <div class="form-group">
                <label for="home_score">home score</label>
                <input type="number" name="home_score" class="form-control" id="home_score">
            </div>
            <div class="form-group">
                <label for="away_score">away score</label>
                <input type="number" name="away_score" class="form-control" id="away_score">
            </div>
            <input type="submit" class="btn btn-default" name="submit" value="Submit">
        </form>
    </div>
</div>
