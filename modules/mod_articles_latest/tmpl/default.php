<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<ul style="margin: 0; padding: 0;" class="latestnews<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $item) : ?>
    <li style="list-style-type: none; clear: both; content: ""; display: table;" itemscope itemtype="https://schema.org/Article">
        <div style="height: auto; width: 100%; display: block; box-sizing: border-box; border-left: 2px solid #003098; border-bottom: 2px solid #003098; border-top: none; border-right: none; padding: 10px; margin: 0 0 10px;">
            <header style="display: block; margin-bottom: 4px;">              
                <a style="text-decoration: none;" href="<?php echo $item->link; ?>" itemprop="url"><h2 style="margin: 0; line-height: 1; color: #000; font-family: Arial CE,Helvetica CEs,Arial,Verdana,lucida,sans-serif; font-weight: bold; font-size: 20px; "><?php echo $item->title; ?> </h2></a>
            </header>
            <div style="display: block; color: #035d8a; text-decoration: none;">
                <a style='text-decoration:none; line-height: 20px; margin-right: 10px; color: #035d8a;'>
                    <img src="http://www.free-icons-download.net/images/contacts-of--blue-flag-icons-66094.png" style="width: 10px; height: 10px;">
                    <?php echo $item->author; ?>
                </a>  
                <a style='text-decoration:none; line-height: 20px; margin-right: 10px; color: #035d8a;'>  
                    <img src="https://cdn2.iconfinder.com/data/icons/calendar-3/500/Calendar_date_day_event_history_month_plan_week_one_January-512.png" style="width: 10px; height: 10px;">
                    <?php echo $item->publish_up; ?>
                </a>

                <?php if ($item->catid === "2") : ?>
                    <a style='text-decoration:none; line-height: 20px; margin-right: 10px; color: #035d8a;' href="index.php/listofarticles">
                <?php else : ?>
                    <a style='text-decoration:none; line-height: 20px; margin-right: 10px; color: #035d8a;' href="index.php/kategorie/<?php echo $item->catid;?>-<?php echo $item->category_alias; ?>">
                <?php endif; ?>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b9/Simpleicons_Interface_folder-black-open-shape.svg" style="width: 10px; height: 10px;">
                        <?php echo $item->category_title; ?>      
                    </a>        
                <a style='text-decoration:none; line-height: 20px; margin-right: 10px; color: #035d8a;'>           
                    <img src="http://www.free-icons-download.net/images/eye-icon-75805.png" style="width: 10px; height: 10px;">
                    <?php echo $item->hits; ?>
                </a>    
            </div>
            <div style="width: 1013.36px; min-height: 81.6px; position: relative; display: block; padding-top: 4px; padding-bottom: 4px; font-family: Arimo, Sans-serif; font-size: 0.875rem; line-height: 1.55;">
                <div style="padding-left: 8px; display: block; box-sizing: inherit; float: right;">
                    <a style="text-decoration: none; display: table; background-color: #EEE; border: 1px solid #888; padding: 3px; width: 73.6px; height: 73.6px;" href="<?php echo $item->link; ?>" itemprop="url">
                        <?php $images = json_decode($item->images); ?>
                        <img src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>" style="width: 100%; height: 100%;"/>
                    </a>
                </div>
                
                <div style="display: inline; min-height: 49px;">
                    <div class="hovno3"><?php echo $item->introtext; ?></div>
                    <br>
                    <footer style="position: absolute; bottom: 0; display: block; line-height: 1.55; font-size: 0.875rem; word-wrap: break-word; color: #303030;">
                        <a href="<?php echo $item->link; ?>" style="text-decoration: none; float: left; display: inline-block; padding: 2px 10px; color: #555; border: 1px solid #CCC; border-radius: 4px; font-family: Arial CE,Helvetica CE,Arial,Verdana,lucida,sans-serif; background: transparent linear-gradient(to bottom, #FBFBFB 0%, #E5E5E5 100%) repeat scroll 0% 0%;">Celý článek...</a>
                    </footer>   
                </div>
            </div>
        </div>
    </li>
<?php endforeach; ?>
</ul>
