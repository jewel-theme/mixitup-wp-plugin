<?php

function bartag_func($atts) {
    $a = shortcode_atts(array(
        'foo' => 'something',
        'bar' => 'something else',
            ), $atts);

    return "foo = {$a['foo']}";
}

add_shortcode('mixitup', 'mixitup_html_generation');
?>