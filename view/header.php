<?php

$name = $_SESSION['name'];

?>
<header>
    <div id="sticker" class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">

                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <a class="navbar-brand page-scroll sticky-logo" href="index.php">
                                <h1>ammu-nation<span>.com</span></h1>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active">
                                    <a class="page-scroll" href="#home">Home</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#about">About</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#blog">News</a>
                                </li>                          
                                <li>
                                    <a class="page-scroll" href="#contact">Contact</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#contact">Manager</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <?php
                                        echo"Hi, ";
                                        echo $name;
                                        ?>
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href=# >#</a></li>
                                        <li><a href=# >#</a></li>
                                        <li><a href="../index.php"> Log Out</a></li>

                                        <span class="caret"></span>
                                    <ul class="dropdown-menu" role="menu">
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
