<?php
function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}
/**
 * load a view
 * 
 * @param string $name
 * @return void
 */
function loadView($name){
    require basePath("Views/{$Partials[$name]}.view.php");
    $partialPath = basePath("Views/Partials/{$name}.php");
    if(file_exists($partialPath)){
        require $partialPath;
    }else{
        echo "Partial {$name} not found.";
    }   
}
?>
