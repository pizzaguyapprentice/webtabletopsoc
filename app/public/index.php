
<?php
    include_once('./onload/header.php');
    include_once('./onload/navbar.php');
?>
<link rel="stylesheet" href="index.css">
<body>
    
    <div class="main">

        <div class="calendar">

            <div class="scheduletitle">
                <h2>Our Weekly Schedule</h2>
            </div>

            <div>
                <table class="schedule">
                    <tr>
                        <td>Monday</td><td>Tuesday</td><td>Wednesday</td>
                        <td>Thursday</td><td>Friday</td>
                    </tr>

                    <tr>
                        <td class="activity green">Magic Monday</td>
                        <td class="empty">---</td>
                        <td class="activity blue">Have a Gander</td>
                        <td class="empty">---</td>
                        <td class="activity red">We Are Board!</td>
                    </tr>
                    <tr>
                        <td class="activity blue">AG 114</td>
                        <td class="empty">---</td>
                        <td class="activity green">AG 114</td>
                        <td class="empty">---</td>
                        <td class="activity red">AG 114</td>
                    </tr>
                    <tr>
                        <td class="activity blue">15:00 - 17:00</td>
                        <td class="empty">---</td>
                        <td class="activity green">15:00 - 17:00</td>
                        <td class="empty">---</td>
                        <td class="activity red">15:00 - 17:00</td>
                    </tr>
                </table>
            </div>

            <div class="scheduletext">
                <p>
                    Here you can find our (usual) weekly schedule. Make sure to check on the portal or on discord for any relevant information or updates.
                </p>
            </div>
            
        </div>
        
        <div class="banner">

            

            <div class="krakenanimation">
                <img src="./img/kraken.svg" class="krakenimg">
            </div>

            
        </div>

        <div class="games">

        </div>
    </div>

    <div class="committee">
        <div class="panel">

            <p class="name"><h3>Mateusz Sewerynski</h3></p>
            <p class="at">@pizzaguyapprentice</p>
            <img src="./img/mati.jpg">
            <p class="description">Chairperson</p>
        </div>

        <div class="panel">
            <p class="name"><h3>Nadia Nya</h3></p>
            <p class="at">@thotimusprime2325</p>
            <img src="./img/nadia.jpg">
            <p class="description">Secretary</p>
        </div>

        <div class="panel">
            <p class="name"><h3>Rosaleen Van Der Wel</h3></p>
            <p class="at">@rose05514</p>
            <img src="./img/rose.jpg">
            <p class="description">Treasurer</p>
        </div>

        <div class="panel">
            <p class="name"><h3>Daniel Blinov</h3></p>
            <p class="at">@jernney</p>
            <img src="./img/danny.jpg">
            <p class="description">Health and Safety</p>
        </div>

        <div class="panel">
            <p class="name"><h3>Troy Tuazon</h3></p>
            <p class="at">@bnb7788</p>
            <img src="./img/troy.jpg">
            <p class="description">Events Rep</p>
        </div>

        <div class="panel">
            <p class="name"><h3>Gabriel Lazar</h3></p>
            <p class="at">@gabstablook</p>
            <img src="./img/gabi.jpg">
            <p class="description">Public Relations</p>
        </div>

        <div class="panel">
            <p class="name"><h3>???</h3></p>
            <p class="at">@???</p>
            <img src="./img/unknown.jpg">
            <p class="description">1st Year Rep</p></p>
        </div>
    </div>



    <?php
    include_once('./onload/footer.php');
    ?>
    
    <script src="./onload/navbaranim.js"></script>
    
</body>

</html>