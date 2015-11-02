    <?php

   $files = glob("../Shared/pictures/*.*");

  for ($i=1; $i<count($files); $i++)

{

$image = $files[$i];
$supported_file = array(
    'gif',
    'jpg',
    'jpeg',
    'png'
);

$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
if (in_array($ext, $supported_file)) {

    echo '<img src="'.$image .'" alt="Random image" />'."<br /><br />";
} else {
    continue;
 }

}

?>
