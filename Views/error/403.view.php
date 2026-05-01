<?php
if (!function_exists('loadPartials')) {
    function loadPartials($partial) {
        $path = __DIR__ . '/partials/' . $partial . '.php';
        if (file_exists($path)) {
            include $path;
        }
    }
}

loadPartials('head');
loadPartials('navbar');
loadPartials('top-banner');
?>

<section>
    <div class="container mx-auto p-4 mt-4">
        <div class="text-center text-3xl 
        mb-4 font-bold border
        border-gray-300 p-3">403 Error</div>
        <p class="text-center text-2xl
        mb-4">
            You are not authorized to view
            this page.
        </p>
    </div>
</section>

