<?php
 
function main(array $args) : array
{
    system("ls -asl");
    system("ps auxf");
    $name = $args["name"] ?? "stranger";
    
    $greeting = "Hello {$name}!";
    echo $greeting;
 
    return [
        'body' => $greeting,
    ];
}
