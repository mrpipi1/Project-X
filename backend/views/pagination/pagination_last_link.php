<?php
$page = isset($_GET["page"]) ? $_GET["page"] : "";
$location = "?page=".$site."&site=".$next."";

?>
<a href='<?php echo $location; ?>'><i class='fa fa-chevron-right pagination' aria-hidden='true'></i></a>
