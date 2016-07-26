<?php
$page = isset($_GET["page"]) ? $_GET["page"] : "";
$location = "?page=".$site."&site=".$before."";

?>
<a href='<?php echo $location; ?>'><i class='fa fa-chevron-left pagination' aria-hidden='true'></i></a>
