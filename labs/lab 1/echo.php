<?php
echo $_REQUEST['data']
if (!isset($_REQUEST["data"])) {
    die("{\"error\": \"Please Provide 'data' field\"}");
}

echo htmlentities($_REQUEST['data']);
?>
