<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/includes/View.php";

require_once $_SERVER["DOCUMENT_ROOT"]."/includes/Form.php";
use ArcherSys\Viewer\Contrib\View;
use ArcherSys\UserInput\Form;

use ArcherSys\UserInput\TextInput;

$googlesearch = new View("Google Search",function(){
?>
<style>
input[name="q"]{
font-family: Segoe UI;
width:50%;
color: white;
background-color: lightgrey;
}
input[type=submit]{
font-family: Segoe UI;
}
</style>
<?php
},function(){
$search = new Form("http://www.google.com/search","Search","GET");
$search->addField(new TextInput("q","Search",30));
echo $search;
});