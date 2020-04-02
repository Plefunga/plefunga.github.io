<!DOCTYPE html>
<html>
    <head>
        <style>
            div {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 600px;
                flex-direction: column;
                margin-top:20%;
            }

            button {
                height: 200px;
                margin: auto;
                width: 60%;
                text-align: center;
                cursor: pointer;
            }
            h1 {
                
            }
            </style>
    </head>
    <body>
        <div>
        <h1>Turn on Aircon</h1>
        <form id="form" action="file.php" target="frame" method="post">
        <textarea id="txt" name="txt" type="text"></textarea>
        </form>
    <button id="btn" onclick="toggle()"><?php
    $file = fopen("file.txt", "r") or die("Unable to open file!");
    echo fread($file,filesize("file.txt"));
    fclose($file);
    ?>
    </button>
    <iframe name="frame" src="file.php" style="display:none"></iframe>
    </div>
    <script>
        function toggle() {
            var w = document.getElementById("btn");
            if(w.innerHTML == "ON") {
                document.getElementById("txt").innerHTML = "OFF";
                document.getElementById("btn").innerHTML = "OFF";
            }
            else{
                document.getElementById("txt").innerHTML = "ON";
                document.getElementById("btn").innerHTML = "ON";
            }
            document.getElementById("form").submit();
        }
        </script>
    </body>
</html>

