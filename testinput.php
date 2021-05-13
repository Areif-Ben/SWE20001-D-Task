<?php

function test_input($comment): string
{
    /**
     * @param string $comment
     */
    $comment = trim($comment);
    $comment = stripslashes($comment);
    $comment = htmlspecialchars($comment);
    return $comment;
}
