<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./styles.css" rel="stylesheet">
</head>
<body>
    <?php
        $video1 = array("titolo" => "Inter 1-2 AC Milan", "idVideo" => "Dt7qyvXX18A");
        $video2 = array("titolo" => "Gli amici pelosi di Pokoyo", "idVideo" => "8wAXrRL7t38");
        $video3 = array("titolo" => "Most Respectful Moments in Football", "idVideo" => "o7qPt6O_CXM");
        $listaVideo = array($video1, $video2, $video3);

        function inserisciVideoYoutube($video, $larPerc, $altPxl) {
            echo "<h2>". $video["titolo"] ."</h2>";
            echo "<iframe src='https://www.youtube.com/embed/". $video["idVideo"] ."' style='height: {$altPxl}px; width:{$larPerc}%'></iframe>";
        }

        $h = 125;
        $w = 25;

        for ($i = 0; $i < count($listaVideo); $i++) {
            $h += 125;
            $w += 25;
            inserisciVideoYoutube($listaVideo[$i], $w, $h);
        }
    ?>
</body>
</html>