<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        
        asort($nums);
        foreach($nums as $num){
            if($num == "4"){
                echo "昇順にソートします。"."<br>";
            }
        echo $num ."<br>";}
        
        arsort($nums);
        foreach($nums as $num){
            if($num=="23"){
                echo "降順にソートします。"."<br>";}
        echo $num ."<br>";}
        ?>
    </p>
</body>

</html>

