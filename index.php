<?php

require_once "lib/ScreenSteps.php";

use lib\ScreenSteps;

$login = "LOGIN";
$password = "PASSWORD";
$account = "ACCOUNT";

$api = new ScreenSteps($login, $password, $account);

echo "<b>Init api</b><br/>";

$doc = '
<?php

require_once "lib/ScreenSteps.php";
use lib\ScreenSteps;

$returnResult = "json"; // or PHP object $returnResult = "object";

$api = new ScreenSteps($login, $password, $account, $returnResult);

?>
';

highlight_string($doc);
echo "<hr/><br/>";

echo "<b>List Sites</b><br/>";

$doc = '
<?php

$sites = $api->getSites();

?>
';

highlight_string($doc);

//$sites = $api->getSites();



echo "<hr/><br/>";

echo "<b>Show Site</b><br/>";

$doc = '
<?php

$sites = $api->showSite($site_id);

?>
';

highlight_string($doc);

//$sites = $api->showSite(15226);

echo "<hr/><br/>";

echo "<b>Search Site</b><br/>";

$doc = '
<?php

$args = ["text" => "user account"];
$args = ["text" => "user account", "page" => 1];
$args = ["tags" => ["account", "admin"]];
$args = ["title" => "user"];
$args = ["title" => "user", "page" => 1];

$args = ["manual_ids" => [1, 2, 3]];

$sites = $api->search(15226, $args);


?>
';

//
//$sites = $api->search(15226);
//

highlight_string($doc);



echo "<hr/><br/>";

echo "<b>Show Manual</b><br/>";

$doc = '
<?php

$manual = $api->showManual($site_id, $manual_id);

?>
';

//
//$sites = $api->showManual(15226, 63080);
//

highlight_string($doc);

echo "<hr/><br/>";

echo "<b>Show Chapter</b><br/>";

$doc = '
<?php

$chapter = $api->showChapter($site_id, $chapter_id);

?>
';

//
//$sites = $api->showChapter(15226, 189584);
//

highlight_string($doc);

echo "<hr/><br/>";

echo "<b>Show Article</b><br/>";

$doc = '
<?php

$article = $api->showArticle($site_id, $article_id);

?>
';

//
//$sites = $api->showArticle(15226, 653857);
//

highlight_string($doc);

echo "<hr/><br/>";

echo "<b>Show File for Article</b><br/>";

$doc = '
<?php

$file = $api->showFileForArticle($site_id, $article_id, $file_id)

?>
';

//
//$sites = $api->showFileForArticle(15226, 653857, 0);
//

highlight_string($doc);


//$sites = $api->search(15226);
//
//echo '<xmp>';
//print_r($sites);
//echo '</xmp>';
