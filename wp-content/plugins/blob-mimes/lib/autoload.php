<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'blobfolio\\wp\\bm\\admin' => '/blobfolio/wp/bm/admin.php',
                'blobfolio\\wp\\bm\\debug' => '/blobfolio/wp/bm/debug.php',
                'blobfolio\\wp\\bm\\mb' => '/blobfolio/wp/bm/mb.php',
                'blobfolio\\wp\\bm\\mime' => '/blobfolio/wp/bm/mime.php',
                'blobfolio\\wp\\bm\\mime\\aliases' => '/blobfolio/wp/bm/mime/aliases.php',
                'blobfolio\\wp\\bm\\svg' => '/blobfolio/wp/bm/svg.php',
                'blobfolio\\wp\\bm\\svg\\svg_base' => '/blobfolio/wp/bm/svg/svg_base.php',
                'blobfolio\\wp\\bm\\svg\\svg_dom' => '/blobfolio/wp/bm/svg/svg_dom.php',
                'blobfolio\\wp\\bm\\svg\\svg_fallback' => '/blobfolio/wp/bm/svg/svg_fallback.php'
            );
        }
        if (isset($classes[$class])) {
            require __DIR__ . $classes[$class];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd
