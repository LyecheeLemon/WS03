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
function loadView($name)
{
    $viewPath = basePath("Views/{$name}.view.php");

    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "View {$name} not found.";
    }
}
?>
