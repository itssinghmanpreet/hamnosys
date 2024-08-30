<?php
    $sentences = json_decode(file_get_contents("sentences.json"), false);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Hamnosys Player</title>

    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta http-equiv="Access-Control-Allow-Methods" content="GET">

    <link rel="stylesheet" href="cwa/cwasa.css" />
    <script>
        let count = [
            <?php 
                foreach(range(1, 10) as $count) {
                    echo "`" . file_get_contents("scripts/$count") . "`,";
                }
            ?>
        ]

        let data = [
            <?php
                foreach($sentences as $sentence) {
                    echo "{ punjabi: `" . $sentence->punjabi . "`, sigml: `" . file_get_contents("scripts/$sentence->filename") . "`, hamnosys: `" . $sentence->hamnosys . "`, english: `" . $sentence->english . "` }, ";
                }    
            ?>
        ]
    </script>

    <style>
        @font-face {
            font-family: 'Anmol Lipi';
            src: url(AnmolLipi.ttf);
        }
    </style>
</head>
<body onload="CWASA.init();">
    <!--================================================================-->
    <h3>Project: Hamnosys Player</h3>
    <h4>Manpreet Singh - M. Tech - GNA University</h4>
    <hr />

    <table align="center">
        <tr>
            <!--================================================================-->
            <!-- CWA signing avatar panel 0 -->
            <!--================================================================-->
            <td align="left" valign="center" width="500" height="500">
                <div class="CWASAAvatar av0" align="center"></div>
            </td>
            <!--================================================================-->

            <td></td>

            <!--================================================================-->
            <!-- CWA signing avatar GUI panels 0 -->
            <!--================================================================-->
            <td align="center" valign="center" style="display: none;">

                <!-- Bespoke signing avatar GUI 0 -->
                <div class="divCtrlPanel">

                    <!-- Avatar Panel -->
                    Avatar: <span class="CWASAAvMenu av0"></span>
                    &nbsp;
                    Ambient: <span class="CWASAAmbBox av0"></span>
                    <br />
                    <!-- Speed Buttons -->
                    Speed (log<sub>2</sub> scale): <span class="CWASASpeed av0"></span>

                    <hr />

                    <!-- SiGML URL -->
                    SiGML URL:<br>
                    <div class="CWASASiGMLURL av0"></div>

                    <!-- SiGML Text -->
                    SiGML Text:<br>
                    <div class="CWASASiGMLText av0"></div>

                    <!-- Avatar/Play/Stop BUTTONS -->
                    <div class="CWASAPlay av0"></div>

                    <span class="CWASAPlayExtra av0"></span>
                    &nbsp;
                    Frames:
                    <span class="CWASAFrames av0"></span>

                    <hr />

                    <div class="CWASAProgress av0"></div>
                    <div class="CWASAStatus av0"></div>

                </div>
                <!--================================================================-->
            </td>
        </tr>
        <tr">
            <td align="center" valign="center" style="padding-top: 24px;">
                <?php 
                    foreach(range(1, 10) as $val) {
                        echo "<button onclick='playCount($val)' style='margin: 0 4px;'>$val</button>";
                    }
                ?>
            </td>
        </tr>
    </table>

    <hr />
    <div align="center" valign="center" style="padding: 24px 0;">
        <div style="width: 80%;">
            <select name="action" id="action" style="width: 80%; font-size: large; padding: 2px; font-family: 'Anmol Lipi';">
                <?php
                    foreach($sentences as $key=>$sentence) {
                        echo "<option value=\"$key\">$sentence->punjabi</option>";
                    }
                ?>
            </select>
            <button style="width: auto; margin-left: 12px; font-size: large; padding: 2px 4px;" onclick="playSentence()">Play</button>
        </div>
    </div>

    <hr />
    <p align="center">
        <small>
            &copy; 2023. Manpreet Singh
        </small>

    <script type="text/javascript" src="index.js" defer></script>
    <script type="text/javascript" src="cwa/allcsa.js"></script>
</body>
</html>
