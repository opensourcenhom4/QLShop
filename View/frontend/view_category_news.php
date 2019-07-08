<?php 
    foreach($arr as $rows)
    {
   ?>
    <li ><a href="index.php?controller=news_detail&id=<?php echo $rows->pk_news_id; ?>"><?php echo $rows->c_name; ?></a></li>
<?php } ?>