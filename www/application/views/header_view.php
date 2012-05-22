<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="Ale XXX" />
        <meta name="keywords" content="Ale XXX" />
        <title><?= $title ?></title>

        <?
        // connection to javascript files
        if (isset($scripts)) {
            foreach ($scripts as $script) {
                print "\n";
                echo '<script src="' . base_url() . $script . '"></script>';
            }
        }

        // connection to javascript files CSS files
        if (isset($css)) {
            foreach ($css as $style) {
                print "\n";
                echo ' <link rel="stylesheet" type="text/css" href="' . base_url() . $style . '" />';
            }
        }
        ?>

        <script type="text/javascript">
            <?
                echo "var base_url='" . base_url() . "';";
            ?> // make a gloval js variable base_url
        </script>
    </head>
    <body>