<?php
    include_once dirname(__FILE__)."/../include/functions.php";
    include_once dirname(__FILE__)."/../include/templates/meta.php";
    include_once dirname(__FILE__)."/../include/templates/mainTemp.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <?php mainHtmlHead(); ?>
    </head>
    <body>
        <?php mainPageStart(); ?>

            <?php mainSidebarStart(); ?>
                <?php mainSidebar(); ?>
            <?php mainSidebarEnd(); ?>

            <?php mainContentStart(); ?>

                <?php mainContentMenu(); ?>
                <?php mainBreadcrumb("Dashboard"); ?>
                <?php mainPageContentStart(); ?>
                <?php loginChk(); ?>


                    


                <?php mainPageContentEnd(); ?>

            <?php mainContentEnd(); ?>

        <?php mainPageEnd(); ?>

        <?php mainMsg(); ?>
        <?php mainHtmlFooter(); ?>

    </body>
</html>






