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

            /* Create two unequal columns that sits next to each other */
            /* Sidebar/left column */
            .side {
                -ms-flex: 30%; /* IE10 */
                flex: 30%;
                background-color: #f1f1f1;
                padding: 20px;
            }

            /* Main column */
            .main {   
                -ms-flex: 70%; /* IE10 */
                flex: 70%;
                background-color: white;
                padding: 20px;
            }

            /* Fake image, just for this example */
            .fakeimg {
                background-color: #aaa;
                width: 100%;
                padding: 20px;
            }

            /* Footer */
            .footer {
                padding: 20px;
                text-align: center;
                background: #ddd;
            }

            .twitter { 
                background: #55ACEE;
                color: white;
                text-align: center;
                padding: 16px;
                transition: all 0.3s ease;
                color: white;
                font-size: 20px;
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
            <h1>Brainlet Gear Holder</h1>
            <p>A <b>unique</b> method created for holding personalized gear slots + notes.</p>
        </div>

        <div class="navbar align ='center'">
            <a href="#" class="active">Home</a>
            <a href="#">Cox</a>
            <a href="cox-cm.php">Cox CM</a>
            <a href="#">Tob</a>
            <a href="#">Hm Tob</a>
            <a href="#">Zulrah</a>
            <a href="#">Slayer Bosses</a>
            <a href="#">Wilderness Bosses</a>
            <a href="#">Skilling</a>
            <a href="#">Clue Hunting</a>
        </div>

        <div class="row">
            <div class="side" align='center'>
                <h2>Suggestions</h2>
                <p>If you have any suggestions, feel free to reach out!</p>
                <p> Ingame: BigHatRogan </p>
                <h3>Socials:</h3>
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <br><br>
                <h3> Thoughts </h3>
                <form action="">
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                <br>
                <input type="submit" value="Submit">
                </form>
            </div>
            <div class="main">
                <h2>TBD</h2>
            </div>
        </div>

        <div class="footer">
            <h2>Placeholder</h2>
        </div>

    </body>
</html>
