<!DOCTYPE html>
<html lang="en">

<?php

include_once ('global.php');
include_once('header.php');
$q = loadArray('SELECT *
        FROM leagues ORDER BY id');

?>

<style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
        margin-bottom: 0;
        border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 830px}

    /* Set gray background color and 100% height */
    .sidenav {
        padding-top: 20px;
        background-color: #f1f1f1;
        height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
        background-color: #555;
        color: white;
        padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
        .sidenav {
            height: auto;
            padding: 15px;
        }
        .row.content {height:auto;}
    }
</style>

<body class="basket">

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <h3>Leagues</h3>
            <?php while ($r = $q->fetch()): ?>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="leagues-view.php?league_id=<?php echo htmlspecialchars($r['id']); ?>"><?php echo htmlspecialchars($r['name']); ?></a></li>
                </ul>
            <?php endwhile; ?>
        </div>
        <div class="col-sm-8 text-left">
        <h1>Games</h1>
            <hr>
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
                        <h3>Games</h3>
                    </div>
                </a>
            </div>
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
                        <h3>Games</h3>
                    </div>
                </a>
            </div>
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
                        <h3>Games</h3>
                    </div>
                </a>
            </div>
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
                        <h3>Games</h3>
                    </div>
                </a>
            </div>
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
                        <h3>Games</h3>
                    </div>
                </a>
            </div>
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
                        <h3>Games</h3>
                    </div>
                </a>
            </div>
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
                        <h3>Games</h3>
                    </div>
                </a>
            </div>
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
                        <h3>Games</h3>
                    </div>
                </a>
            </div>
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
                        <h3>Games</h3>
                    </div>
                </a>
            </div>
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
                        <h3>Games</h3>
                    </div>
                </a>
            </div>
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
                        <h3>Games</h3>
                    </div>
                </a>
            </div>
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
                        <h3>Games</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-2 sidenav">
            <div class="well">
                <p>MVP list</p>
            </div>
            <div class="well">
                <p>Best scorers</p>
            </div>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p><a href="about-us.php">about us</a></p>
</footer>

</body>

