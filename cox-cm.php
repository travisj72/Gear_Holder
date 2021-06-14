<?php
    if(isset($_POST['Submit1']))
    { 
        $filepath = "images/" . $_FILES["file"]["name"];

        if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
        {
            echo "<img src=".$filepath." height=200 width=300 />";
        } 
        else 
        {
            echo "Error !!";
        }
    } 
?>


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
            <h1>Chambers of Xeric: Challenged Modes</h1>
        </div>

        <div class="navbar align ='center'">
            <a href="home.php" >Home</a>
            <a href="#">Cox</a>
            <a href="#" class="active">Cox CM</a>
            <a href="#">Tob</a>
            <a href="#">Hm Tob</a>
            <a href="#">Zulrah</a>
            <a href="#">Slayer Bosses</a>
            <a href="#">Wilderness Bosses</a>
            <a href="#">Skilling</a>
            <a href="#">Clue Hunting</a>
        </div>

        <div class="main">
            <div class="row"  align='center'>
                <div class="column">
                    <h3> Gear </h3>
                    <img src="my_gear.jpg">
                    <form action="fileupload.php" enctype="multipart/form-data" method="post">
                    Select Image :
                        <input type="file" name="file"><br/>
                        <input type="submit" value="Upload" name="Submit1"> <br/>
                    </form>
                    <!-- upload button -->
                </div>  
                <div class="column">
                    <h3> Inventory </h3>
                    <img src="my_invy.jpg" >
                    <!-- upload button -->
                </div>
                <div class="column">
                    <h3> Notes </h3>
                    <h4> Floor 1 </h4>
                    <p> Rooms to beat: Tekton, Crabs, Ice Demon, Shamans </p>
                    <p> Items Needed: Everything for raid </p>
                    <p> Gather 22 Endarkended Juice, 12 Stinkhorn Mushrooms, 3 Cicely, 2 planks </p>
                    <p> Pick up Axe from Ice Demon, store axe for Muttadile
                    <p> Prep after Shamans </p>
                    <h4> Floor 2 </h4>
                    <p> Rooms to beat: Vanguards, Thieving, Vespula, Rope </p>
                    <p> Items Needed: Overload, Stamina, Lockpick, TriBrid Gear, Brews + Restores </p>
                    <p> Set Quick Prayers for Vespula </p>
                    <h4> Floor 3 </h4>
                    <p> Rooms to beat: Guardians, Vasa, Mystics, Muttadile </p>
                    <p> Items Needed: Venge Runes, Pickaxe, Salve, Axe, Stamina, Claws, Melee + Range Gear + Trident/Sang </p>
                    <h4> Olm </h4>
                    <p> Standard Olm Room set up</p>
                    <p> Set Roles -> Mage Skip, Runner, Melee Hand etc </p>


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
