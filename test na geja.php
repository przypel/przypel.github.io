<html>
    <head>
        <title>Gej test</title>
        <style>
            body{
                background-color:#ffcccc;
                color:white;
                font-size:30px;
            }
        </style>
    </head>
    <body>
    <center><h1>JEDYNY WIARYGODNY GEJ TEST<h1></center><hr>
    <form method="post">
        <h2>Wybierz ulubioną grę z podanych:</h2>
        <input type="radio" name="gra" value="lol" >League of Legends <br>
        <input type="radio" name="gra" value="wow" >World of Warcraft <br>
        <input type="radio" name="gra" value="roblox" >Roblox <br>
        <input type="radio" name="gra" value="minecraft" >Minecraft <br>
        <input type="radio" name="gra" value="msp" >MovieStar Planet <br>
        <input type="radio" name="gra" value="genshin" >Genshin Impact <br>
        <input type="radio" name="gra" value="osu" >Osu! <br>
        <input type="radio" name="gra" value="fortnite" >Fortnite <br><hr>
        <h2>Z jakiej platformy korzystasz do słuchania muzyki?</h2>
        <input type="radio" name="muzyka" value="spotify">Spotify <br>
        <input type="radio" name="muzyka" value="soundcloud">Soundcloud <br>
        <input type="radio" name="muzyka" value="ytmusic">YouTube music <br>
        <input type="radio" name="muzyka" value="apple">Apple music <br>
        <input type="radio" name="muzyka" value="radio">Słucham radia <br>
        <input type="radio" name="muzyka" value="nieslucha">Nie słucham muzyki <br><hr>
        <h2>Z jakiej platformy społecznościowej korzystasz najwięcej?</h2>
        <input type="radio" name="social" value="tiktok">TikTok <br>
        <input type="radio" name="social" value="instagram">Instagram <br>
        <input type="radio" name="social" value="snapchat">Snapchat <br>
        <input type="radio" name="social" value="facebook">Facebook <br>
        <input type="radio" name="social" value="twitter">Twitter <br>
        <input type="radio" name="social" value="reddit">Reddit <br>
        <input type="radio" name="social" value="niekorzysta">Nie korzystam <br><hr>
        <h2>Czy myślisz całymi dniami o całowaniu chłopców?</h2>
        <input type="radio" name="calus" value="tak">Tak <br>
        <input type="radio" name="calus" value="nie">Nie <br><hr>
        <input type="submit" value="Zakończ test">


        <?php

        $procenty=0;


        if (!empty($_POST['gra']))
    {
        switch($_POST['gra']){
            case 'lol':
                $procenty+=2;
                break;
            case 'wow':
                $procenty+=5;
                break;
            case 'roblox':
                $procenty+=3;
                break;
            case 'minecraft':
                $procenty+=0;
                break;
            case 'msp':
                $procenty+=10;
                break;
            case 'genshin':
                $procenty+=10;
                break;
            case 'osu':
                $procenty+=1;
                break;
            case 'fortnite':
                $procenty+=3;
                break;
            default:
                echo "zabij sie";
                break; 
        }
    }


        if (!empty($_POST['muzyka'])){
            switch($_POST['muzyka']){
                case 'spotify':
                $procenty+=7;
                break;
                case 'soundcloud':
                $procenty+=0;
                break;
                case 'ytmusic':
                $procenty+=5;
                break;
                case 'apple':
                $procenty+=10;
                break;
                case 'radio':
                $procenty+=0;
                break;
                case 'nieslucha':
                $procenty+=0;
                break;
                default:
                echo "zabij sie";
                break;
            }
        }
    

        if (!empty($_POST['social'])){
            switch($_POST['social']){
                case 'tiktok':
                $procenty+=6;
                break;
                case 'instagram':
                $procenty+=8;
                break;
                case 'snapchat':
                $procenty+=1;
                break;
                case 'facebook':
                $procenty+=0;
                break;
                case 'twitter':
                $procenty+=10;
                break;
                case 'reddit':
                $procenty+=5;
                break;
                case 'niekorzysta':
                $procenty+=0;
                break;
            }
        }



        if (!empty($_POST['calus'])){
            switch($_POST['calus']){
                case 'tak':
                $procenty+=10;
                break;
                case 'nie':
                $procenty+=0;
                break;
                default:
                echo "zabij sie";
                break;
            }
        }
echo $procenty. "%"

        ?>
        
        </form>
    </body>
</html>