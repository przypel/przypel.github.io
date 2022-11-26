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
        <h2>Jaki jest twój ulubiony serial?</h2>
        <input type="radio" name="serial" value="st">Stranger Things<br>
        <input type="radio" name="serial" value="graotron">Gra o Tron<br>
        <input type="radio" name="serial" value="riverdale">Riverdale<br>
        <input type="radio" name="serial" value="friends">Friends<br>
        <input type="radio" name="serial" value="breakingbad">Breaking Bad<br>
        <input type="radio" name="serial" value="sexeducation">Sex education<br><hr>
        <h2>Czy czytałeś lub planujesz przeczytać Heartstopper?</h2>
        <input type="radio" name="hs" value="tak">Tak<br>
        <input type="radio" name="hs" value="nie">Nie<br><hr>
        <h2>Czy podoba ci sie postać Gragas z League of Legends?</h2>
        <input type="radio" name="gragas" value="tak">Tak<br>
        <input type="radio" name="gragas" value="nie">Nie<br><hr>
        <h2>Jaki jest twój ulubiony gatunek muzyczny?</h2>
        <input type="radio" name="gatunek" value="pop">Pop<br>
        <input type="radio" name="gatunek" value="kpop">K-pop<br>
        <input type="radio" name="gatunek" value="rap">Rap<br>
        <input type="radio" name="gatunek" value="jazz">Jazz<br>
        <input type="radio" name="gatunek" value="klasyczna">Muzyka klasyczna<br>
        <input type="radio" name="gatunek" value="rock">Rock<br>
        <input type="radio" name="gatunek" value="hiphop">Hip-Hop<br>
        <input type="radio" name="gatunek" value="disco">Disco polo<br>
        <input type="radio" name="gatunek" value="radio">To co leci w radiu<br><hr>
        <h2>Czy popierasz Andrew Tate?</h2>
        <input type="radio" name="tate" value="feministka">Nie, jestem feministą.<br>
        <input type="radio" name="tate" value="ktoto">Nie wiem kto to<br>
        <input type="radio" name="tate" value="sigma">Tak, jestem sigmą<br>
        <input type="radio" name="tate" value="niektore">Z niektórymi opiniami się zgadzam<br>
        <input type="radio" name="tate" value="nie">Nie<br><hr>
        <h2>Wolisz zadawać się z kobietami czy mężczyznami?</h2>
        <input type="radio" name="kobietaczymezczyzna" value="ukrytygej">Kobietami, nie jestem gejem<br>
        <input type="radio" name="kobietaczymezczyzna" value="ukrytygej2">Mężczyznami, jestem sigmą.<br>
        <input type="radio" name="kobietaczymezczyzna" value="mezczyzna">Mężczyznami<br>
        <input type="radio" name="kobietaczymezczyzna" value="kobieta">Kobietami<br>
        <input type="radio" name="kobietaczymezczyzna" value="nikt">Z nikim<br><hr>
        <h2>Czy myślisz całymi dniami o całowaniu chłopców?</h2>
        <input type="radio" name="calus" value="tak">Tak <br>
        <input type="radio" name="calus" value="nie">Nie <br><hr>
        <input type="submit" value="Zakończ test">


        <?php
         $procenty=0;
         if (!empty($_POST['kobietaczymezczyzna'])){
            switch($_POST['kobietaczymezczyzna']){
                case 'ukrytygej':
                    $procenty+=10;
                    break;
                case 'ukrytygej2':
                    $procenty+=10;
                    break;
                case 'mezczyzna':
                    $procenty-=1;
                    break;
                case 'kobieta':
                    $procenty+=5;
                    break;
                case 'nikt':
                    $procenty+=0;
                    break;
                default:
                echo "zabij sie";
                break;
                }
            }
         if (!empty($_POST['tate'])){
            switch($_POST['tate']){
                case 'feministka':
                    $procenty+=10;
                    break;
                case 'ktoto':
                    $procenty+=0;
                    break;
                case 'sigma':
                    $procenty+=10;
                    break;
                case 'niektore':
                    $procenty+=3;
                    break;
                case 'nie':
                    $procenty-=2;
                    break;
                default:
                echo "zabij sie";
                break;
                }
            }
         if (!empty($_POST['gatunek'])){
             switch($_POST['gatunek']){
                 case 'pop':
                     $procenty+=7;
                     break;
                 case 'kpop':
                     $procenty+=10;
                     break;
                 case 'rap':
                     $procenty+=6;
                     break;
                 case 'jazz':
                     $procenty+=2;
                     break;
                case 'klasyczna':
                    $procenty-=5;
                    break;
                case 'rock':
                    $procenty+=0;
                    break;
                case 'hiphop':
                    $procenty+=10;
                    break;
                case 'disco':
                    $procenty+=1;
                    break;
                case 'radio':
                    $procenty-=2;
                    break;
                default:
                     echo "zabij sie";
                     break;
                 }
             }

        
        if (!empty($_POST['gragas'])){
            switch($_POST['gragas']){
                case 'tak':
                    $procenty-=5;
                    break;
                case 'nie':
                    $procenty+=10;
                    break;
                default:
                    echo "zabij sie";
                    break;
                }
            }
        if (!empty($_POST['hs'])){
            switch($_POST['hs']){
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
        if (!empty($_POST['serial'])){
            switch($_POST['serial']){
                case 'st':
                    $procenty+=8;
                    break;
                case 'graotron':
                    $procenty+=0;
                    break;
                case 'riverdale':
                    $procenty+=10;
                    break;
                case 'friends':
                    $procenty+=5;
                    break;
                case 'breakingbad':
                    $procenty-=3;
                    break;
                case 'sexeducation':
                    $procenty+=10;
                    break;
                default:
                    echo "zabij sie";
                    break;
            }
        }

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
                $procenty-=1;
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
                $procenty-=5;
                break;
                case 'nieslucha':
                $procenty-=5;
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
                $procenty-=2;
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
        if(!empty($procenty)){
            switch($procenty){
            case $procenty<0:
            echo "Jesteś po prostu homofobem";
            break;
            case $procenty<20:
            echo "Nie jesteś gejem";
            break;
            case $procenty<40:
            echo "Jesteś tak troche gejem";
            break;
            case $procenty<60:
            echo "Raczej lubisz chłopców 🏳‍🌈";
            break;
            case $procenty<80:
            echo "Gejuch z ciebie XDD";
            break;
            case $procenty<99:
            echo "Przeogromny gej";
            break;
            case $procenty=100:
            echo "Idź już wyruchać jakiegoś chłopca pedale XDDDDDDD";
            break;
            default:
            echo "Debilu coś zrobiłeś źle";
            break;
            }
           
        }

        ?>
        
        </form>
    </body>
</html>