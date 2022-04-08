<?php

foreach ($menu as $title) {?>
<li class="px-5 py-2"><a class="<?php echo($_SERVER["REQUEST_URI"] == $title['path'] ? "text-orange cursor-default" : "text-gray-600 hover:text-orange")?>"  href="<?=$title['path']?>">
    <?php echo (($title['active'] ||  !empty($_COOKIE['active'])) ? cutString($title['title'], 15) : "")?></a></li>
<?php }?>
