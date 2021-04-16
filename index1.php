<!DOCTYPE html>
<html lang ='en'>
<head>
    <title>Deck of Cards!</title>
    <?php require('bj.php');?>
</head>
<style>
    body{
        background-image: url('1.gif');
        color: white;
        margin-top: 40px;
    }
    a{
        color: yellow;
        border: 2px solid gold;
        padding: 4px;
        margin: 10px 10px;
    }
    #row{
        display: block;
        margin-bottom: 30px;
    }
</style>


<body>
    <center>
        <table border=0 cellspacing=10 cellpadding=10>
        <tr>
            <td>
                <img src='Cards/b1fv.png'/>
            </td>
            <td valign=center><strong>Playing Cards</strong></td>
            <td>
                <img src='Cards/b2fv.png'/>
            </td>
        </tr>
        <tr></tr>
        </table>

        <table id='row' border=1 cellspacing=0 cellpadding=10>
            <?php

                $deck = new Deck();

                echo "<div id='row'>". $deck->shuffle(). "</div><br><br>";

                echo $deck->shuffle();

            ?>
        </table>

        <?php

        $player = new Player();

        echo "<a href=" .$player->discard() . ">DRAW</a>";

        ?>
        <?php
        $page = $_SERVER['PHP_SELF'];
        echo "<a href=\"$page\">RESET</a>";
        ?>


        <table border=0 cellspacing=10>
            <tr>
                <td align=center>
                    <font size=2></br>
                    These images were created using <a href='http://www.mindworkshop.com/alchemy/alchemy.html'>gifcon</a>.
                    </font>
                </td>
            </tr>
        </table>
</body>
</html>