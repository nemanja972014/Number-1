<?php
include_once ('global.php');
$header = loadArray('SELECT *
        FROM leagues ORDER BY id');
?>

<head>
    <title>Eurobasket</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 830px}

    /* Set gray background color and 100% height */
    .sidenav {
        background-color: #f1f1f1;
        height: 100%;
    }

    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
        .row.content {height: auto;}
    }
</style>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Eurobasket</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">View <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">leagues</a></li>
                        <li><a href="#">teams</a></li>
                        <li><a href="#">players</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Stats <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">team</a></li>
                        <li><a href="#">individual</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Add <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="leagues.php">League</a></li>
                        <li><a href="teams.php">Team</a></li>
                        <li><a href="players.php">Player</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-submenu">
                            <a class="test" tabindex="-1" href="#">Game and stats <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php while ($rrr = $header->fetch()): ?>
                                <li><a href="games&stats.php?league_id=<?php echo htmlspecialchars($rrr['id']); ?>"><?php echo htmlspecialchars($rrr['name']); ?></a></li>
                                <?php endwhile; ?>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<script>
    $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>