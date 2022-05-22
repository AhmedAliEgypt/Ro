{"status":"<?php

$k1 = $_GET ["key"];

switch ($k1) {
    case "arabic-dev":
    case "AD-HSK":
        echo "true";
        break;
	default:
		echo "false";
		break;
}
?>","uuid":"<?php echo $_GET['udid']; ?>"}