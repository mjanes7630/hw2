<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Slots</title>
        
        <meta charset="utf-8">
        <!-- Jquery !-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <!-- Java Script !-->
        <script src="./js/scripts.js"></script>
        
        <!-- Custom CSS !-->
        <link href="./css/styles.css" rel="stylesheet" type="text/css"/>
        
        <!-- Bootstrap !-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    </head>
    
    <body class="text-center">
        <h1 class="jumbotron">Smile Slots</h1>
        <br><br>
        <h2>Is luck on your side?</h2>
        <h3>Enter your desired bet, then click "spin" to find out!</h3>
        <h3>3 of a kind : 2x payout</h3>
        <h3>3 smiles : 5x payout</h3>
        
        <br><br>
        
        <!-- Slots !-->
        <div>
            <img id="slot0" src="img\Smile.png" alt=":)">
            <img id="slot1" src="img\Frown.png" alt=":(">
            <img id="slot2" src="img\Face.png" atl=":|">
        </div>
        
        <br><br>
        
        <!-- Bet & Button !-->
        <div>
            <b2>Bet : </b2>
            <input id="bet" type="text">
            <button id="spinButton" type="button">Spin</button>
        </div>
        
        <br><br>
        
        <!-- Winnings !-->
        <div id = "winnings"></div>
        
        <br><br>
        
    </body>
    <footer>
        Michael Janes - Cst336
        Homework 2
    </footer>
</html>