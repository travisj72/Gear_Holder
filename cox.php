<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Page Title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Load font awesome icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            * {
                box-sizing: border-box;
            }

            /* Style the body */
            body {
                font-family: Arial, Helvetica, sans-serif;
                margin: 0;
            }

            /* Header/logo Title */
            .header {
                padding: 80px;
                text-align: center;
                background: purple;
                color: white;
            }

            /* Increase the font size of the heading */
            .header h1 {
                font-size: 40px;
            }

            /* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
            .navbar {
                overflow: hidden;
                background-color: #333;
                position: sticky;
                position: -webkit-sticky;
                top: 0;
            }

            /* Style the navigation bar links */
            .navbar a {
                float: left;
                display: block;
                color: white;
                text-align: center;
                padding: 14px 20px;
                text-decoration: none;
            }

            /* Change color on hover */
            .navbar a:hover {
                background-color: #ddd;
                color: black;
            }

            /* Active/current link */
            .navbar a.active {
                background-color: #666;
                color: white;
            }

            /* Column container */
            .row {  
                display: -ms-flexbox; /* IE10 */
                display: flex;
                -ms-flex-wrap: wrap; /* IE10 */
                flex-wrap: wrap;
            }

            /* Main column */
            .main {   
                -ms-flex: 70%; /* IE10 */
                flex: 70%;
                background-color: white;
                padding: 20px;
            }

            .column {
                float: left;
                width: 33.33%;
            }

            .column2 {
                float: left;
                width: 50%;
            }

            /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 700px) {
                .row {   
                    flex-direction: column;
                }
            }

            /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
            @media screen and (max-width: 400px) {
                .navbar a {
                    float: none;
                    width: 100%;
                }
            }
        </style>
    </head>
    <body>

        <div class="header">
            <h1>Chambers of Xeric</h1>
        </div>

        <div class="navbar align ='center'">
            <a href="home.php" >Home</a>
            <a href="cox.php" class="active">Cox</a>
            <a href="cox-cm.php" >Cox CM</a>
            <a href="tob.php" >Tob</a>
            <a href="tob-hm.php">Hm Tob</a>
            <a href="zulrah.php">Zulrah</a>
            <a href="slayer.php">Slayer Bosses</a>
            <a href="wildy.php">Wilderness Bosses</a>
            <a href="skilling.php">Skilling</a>
            <a href="clues.php">Clue Hunting</a>
        </div>

        <div class="main">
            <div class="row"  align='center'>
                <div class="column">
                    <h3> Gear </h3>
                    <img src="my_gear.jpg">
                    <!-- upload button -->
                </div>  
                <div class="column">
                    <h3> Inventory </h3>
                    <img src="my_invy.jpg" >
                    <!-- upload button -->
                </div>
                <div class="column">
                
                    <h3> Notes </h3>
                    <h4> Popular Scouts </h4>
                    <h4> Best Team Scouts </h4>
                    <h4> High Point Scouts </h4>

                </div>
            </div>

            <div class="row" align='center'>

                <div class="column2">
                    <h3> Max Gear </h3>
                    <img src="my_gear.jpg"> 
                </div>  
                <div class="column2">
                    <h3> Best Inventory </h3>
                    <img src="my_invy.jpg">
                </div>
                
            </div>
        </div>


    </body>
</html>
