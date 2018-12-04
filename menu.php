


<?php

if(isset($_SESSION['logged_user'])){
$menu = array(
   array(
        'title' => 'Головна',
        'url' => 'index.php',
  
    ),
    array(
        'title' => 'Бронювання квитків',
        'url' => 'machinery.php',
       
    ),
    array(
        'title' => 'Розклад',
        'url' => 'about.php',
       
    ),
    array(
        'title' => 'Кабінет',
        'url' => 'admin/index.php',
       
    )
);   
}else

  $menu= array(
  
    array(
        'title' => 'Головна',
        'url' => 'index.php',
  
    ),
    array(
        'title' => 'Бронювання квитків',
        'url' => 'machinery.php',
       
    ),
    array(
        'title' => 'Розклад',
        'url' => 'about.php',
       
    )
);


echo'
<ul>';
   
 foreach($menu as $list_item) {
        echo '<li>';
        echo "<a href='{$list_item['url']}'>{$list_item['title']}</a>";
        echo '</li>';
    }
  echo' </ul>';

?>





