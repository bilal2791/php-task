<?php
require("vendor/stripe/stripe-php/init.php");

$publishedKey="pk_test_51GuJUHEWIKxG0jQGLVxTtTub3EwcntFih92jTvVb6FFcFgUyXyBskAB5GW6TIEx7b7h1OM3V7kEy1LecUWUREds300dUPcN6IJ";

$secretKey="sk_test_51GuJUHEWIKxG0jQGipoLydXlOInn5TTVhlzENqeEWko1O4Mp8yx6xCCO5urD7clz3CY0vg1Ar2VNOD81jSQ1YCct00WIysfCOy";

\Stripe\Stripe::setApiKey($secretKey);

?>