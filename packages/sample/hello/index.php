<?php
 
function main(array $args) : array
{
    system("ls -asl");
    $name = $args["name"] ?? "stranger";
    
    $greeting = "Hello {$name}!";
    echo $greeting;
 
    return [
        'body' => $greeting,
    ];
}
