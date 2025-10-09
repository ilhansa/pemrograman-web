<?php
    // $pattern = '/[0-9]+/';
    // $text = "there are 123 apples.";
    // if (preg_match($pattern, $text, $matches)) {
    //     echo "cocokan: ". $matches [0]; 
    // } else {
    //     echo "tidak ada yang cocok";
    // }

    // $pattern = '/apple/';
    // $replacement = "banana";
    // $text = "i like apple pie.";
    // $new_text = preg_replace($pattern, $replacement, $text);
    // echo $new_text;

    // $pattern = '/go*d/';
    // $text = "god is good.";
    // if (preg_match($pattern, $text, $matches)) {
    //     echo "cocokan: ". $matches [0]; 
    // } else {
    //     echo "tidak ada yang cocok";
    // }

    $pattern = '/go{0,3}d/';
    $text = "god is good.";
    if (preg_match($pattern, $text, $matches)) {
        echo "cocokan: ". $matches [0]; 
    } else {
        echo "tidak ada yang cocok";
    }
?>