{"filter":false,"title":"register2.php","tooltip":"/register2.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":195,"column":28},"end":{"row":195,"column":32},"action":"remove","lines":["    "],"id":301}],[{"start":{"row":195,"column":24},"end":{"row":195,"column":28},"action":"remove","lines":["    "],"id":302}],[{"start":{"row":195,"column":20},"end":{"row":195,"column":24},"action":"remove","lines":["    "],"id":303}],[{"start":{"row":195,"column":16},"end":{"row":195,"column":20},"action":"remove","lines":["    "],"id":304}],[{"start":{"row":195,"column":12},"end":{"row":195,"column":16},"action":"remove","lines":["    "],"id":305}],[{"start":{"row":195,"column":8},"end":{"row":195,"column":12},"action":"remove","lines":["    "],"id":306}],[{"start":{"row":195,"column":4},"end":{"row":195,"column":8},"action":"remove","lines":["    "],"id":307}],[{"start":{"row":195,"column":0},"end":{"row":195,"column":4},"action":"remove","lines":["    "],"id":308}],[{"start":{"row":194,"column":33},"end":{"row":195,"column":0},"action":"remove","lines":["",""],"id":309}],[{"start":{"row":194,"column":33},"end":{"row":194,"column":34},"action":"insert","lines":[" "],"id":310}],[{"start":{"row":195,"column":26},"end":{"row":195,"column":30},"action":"remove","lines":["  ?>"],"id":311}],[{"start":{"row":194,"column":129},"end":{"row":194,"column":133},"action":"insert","lines":["  ?>"],"id":312}],[{"start":{"row":194,"column":0},"end":{"row":194,"column":133},"action":"remove","lines":["                            <?php if (!$success){ die(\"Could not enter data: \".$db->error);} echo \"Thank you. Address submitted!\"  ?>"],"id":313}],[{"start":{"row":0,"column":0},"end":{"row":35,"column":2},"action":"insert","lines":["<?php","    $servername = getenv('IP');","    $username = getenv('C9_USER');","    $password = \"\";","    $database = \"c9\";","    $dbport = 3306;","","    // Create connection","    $db = new mysqli($servername, $username, $password, $database, $dbport);","// Check connection","if ($db->connect_error) {","    die(\"Connection failed: \" . $db->connect_error);","} ","","$address_street  = $_POST['address_street']; /* not null */","$address_street2 = $_POST['address_street2'];","$address_city    = $_POST['address_city']; /* not null */","$address_county  = $_POST['address_county']; /* not null */","$address_eircode = $_POST['address_eircode'];","$address_country = $_POST['address_country'];","$address_geo_latitude = null;","$address_geo_longtitude = null;","","$sql = \"INSERT INTO Address(address_id, address_street, address_street2, address_city, address_county, address_eircode, address_country, address_geo_latitude, address_geo_longtitude)","VALUES ('', '$address_street', '$address_street2', '$address_city', '$address_county', '$address_eircode', '$address_country', '$address_geo_latitude', '$address_geo_longtitude')\";","","$success = $db->query($sql);","","/*if (!$success){","    die(\"Could not enter data: \".$db->error);","}","echo \"Thank you. Address submitted!\"","","","$db->close();*/","?>"],"id":314}],[{"start":{"row":35,"column":2},"end":{"row":36,"column":0},"action":"insert","lines":["",""],"id":315}],[{"start":{"row":36,"column":0},"end":{"row":37,"column":0},"action":"insert","lines":["",""],"id":316}],[{"start":{"row":0,"column":5},"end":{"row":0,"column":6},"action":"insert","lines":["?"],"id":317}],[{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"remove","lines":["?"],"id":318}],[{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"insert","lines":["?"],"id":319}],[{"start":{"row":0,"column":5},"end":{"row":0,"column":6},"action":"remove","lines":["?"],"id":320}],[{"start":{"row":28,"column":0},"end":{"row":28,"column":2},"action":"remove","lines":["/*"],"id":321}],[{"start":{"row":31,"column":36},"end":{"row":31,"column":37},"action":"insert","lines":["/"],"id":322}],[{"start":{"row":31,"column":37},"end":{"row":31,"column":38},"action":"insert","lines":["*"],"id":323}],[{"start":{"row":28,"column":0},"end":{"row":28,"column":1},"action":"insert","lines":["*"],"id":324}],[{"start":{"row":28,"column":1},"end":{"row":28,"column":2},"action":"insert","lines":["/"],"id":325}],[{"start":{"row":31,"column":36},"end":{"row":31,"column":37},"action":"insert","lines":["*"],"id":326}],[{"start":{"row":31,"column":38},"end":{"row":31,"column":39},"action":"remove","lines":["*"],"id":327}],[{"start":{"row":28,"column":0},"end":{"row":28,"column":2},"action":"remove","lines":["*/"],"id":328},{"start":{"row":28,"column":0},"end":{"row":28,"column":1},"action":"insert","lines":["<"]}],[{"start":{"row":28,"column":1},"end":{"row":28,"column":2},"action":"insert","lines":["!"],"id":329}],[{"start":{"row":28,"column":2},"end":{"row":28,"column":3},"action":"insert","lines":["-"],"id":330}],[{"start":{"row":28,"column":3},"end":{"row":28,"column":4},"action":"insert","lines":["-"],"id":331}],[{"start":{"row":28,"column":4},"end":{"row":28,"column":5},"action":"insert","lines":[" "],"id":332}],[{"start":{"row":28,"column":4},"end":{"row":28,"column":5},"action":"remove","lines":[" "],"id":333}],[{"start":{"row":28,"column":3},"end":{"row":28,"column":4},"action":"remove","lines":["-"],"id":334}],[{"start":{"row":28,"column":2},"end":{"row":28,"column":3},"action":"remove","lines":["-"],"id":335}],[{"start":{"row":28,"column":1},"end":{"row":28,"column":2},"action":"remove","lines":["!"],"id":336}],[{"start":{"row":28,"column":0},"end":{"row":28,"column":1},"action":"remove","lines":["<"],"id":337}],[{"start":{"row":27,"column":0},"end":{"row":28,"column":0},"action":"remove","lines":["",""],"id":338}],[{"start":{"row":27,"column":0},"end":{"row":28,"column":0},"action":"insert","lines":["",""],"id":339}],[{"start":{"row":28,"column":0},"end":{"row":28,"column":1},"action":"insert","lines":["/"],"id":340}],[{"start":{"row":28,"column":1},"end":{"row":28,"column":2},"action":"insert","lines":["/"],"id":341}],[{"start":{"row":29,"column":0},"end":{"row":29,"column":1},"action":"insert","lines":["/"],"id":342}],[{"start":{"row":29,"column":1},"end":{"row":29,"column":2},"action":"insert","lines":["/"],"id":343}],[{"start":{"row":30,"column":1},"end":{"row":30,"column":2},"action":"insert","lines":["/"],"id":344}],[{"start":{"row":30,"column":2},"end":{"row":30,"column":3},"action":"insert","lines":["/"],"id":345}],[{"start":{"row":30,"column":2},"end":{"row":30,"column":3},"action":"remove","lines":["/"],"id":346}],[{"start":{"row":30,"column":1},"end":{"row":30,"column":2},"action":"remove","lines":["/"],"id":347}],[{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"insert","lines":["/"],"id":348}],[{"start":{"row":30,"column":1},"end":{"row":30,"column":2},"action":"insert","lines":["/"],"id":349}],[{"start":{"row":31,"column":0},"end":{"row":31,"column":1},"action":"insert","lines":["/"],"id":350}],[{"start":{"row":31,"column":1},"end":{"row":31,"column":2},"action":"insert","lines":["/"],"id":351}],[{"start":{"row":31,"column":39},"end":{"row":31,"column":40},"action":"remove","lines":["/"],"id":352}],[{"start":{"row":31,"column":38},"end":{"row":31,"column":39},"action":"remove","lines":["*"],"id":353}],[{"start":{"row":141,"column":42},"end":{"row":141,"column":74},"action":"remove","lines":["/php/keithphp/address_submit.php"],"id":354}],[{"start":{"row":231,"column":0},"end":{"row":231,"column":4},"action":"insert","lines":["    "],"id":355}],[{"start":{"row":231,"column":4},"end":{"row":231,"column":8},"action":"insert","lines":["    "],"id":356}],[{"start":{"row":231,"column":8},"end":{"row":231,"column":12},"action":"insert","lines":["    "],"id":357}],[{"start":{"row":231,"column":12},"end":{"row":231,"column":16},"action":"insert","lines":["    "],"id":358}],[{"start":{"row":231,"column":16},"end":{"row":231,"column":20},"action":"insert","lines":["    "],"id":359}],[{"start":{"row":231,"column":20},"end":{"row":231,"column":24},"action":"insert","lines":["    "],"id":360}],[{"start":{"row":231,"column":24},"end":{"row":231,"column":28},"action":"insert","lines":["    "],"id":361}],[{"start":{"row":231,"column":28},"end":{"row":231,"column":29},"action":"insert","lines":["<"],"id":362}],[{"start":{"row":231,"column":29},"end":{"row":231,"column":30},"action":"insert","lines":["?"],"id":363}],[{"start":{"row":231,"column":30},"end":{"row":231,"column":31},"action":"insert","lines":["p"],"id":364}],[{"start":{"row":231,"column":31},"end":{"row":231,"column":32},"action":"insert","lines":["h"],"id":365}],[{"start":{"row":231,"column":32},"end":{"row":231,"column":33},"action":"insert","lines":["p"],"id":366}],[{"start":{"row":231,"column":33},"end":{"row":232,"column":0},"action":"insert","lines":["",""],"id":367},{"start":{"row":232,"column":0},"end":{"row":232,"column":28},"action":"insert","lines":["                            "]}],[{"start":{"row":232,"column":28},"end":{"row":235,"column":36},"action":"insert","lines":["if (!$success){","    die(\"Could not enter data: \".$db->error);","}","echo \"Thank you. Address submitted!\""],"id":368}],[{"start":{"row":235,"column":36},"end":{"row":236,"column":0},"action":"insert","lines":["",""],"id":369}],[{"start":{"row":236,"column":0},"end":{"row":236,"column":1},"action":"insert","lines":[">"],"id":370}],[{"start":{"row":236,"column":0},"end":{"row":236,"column":1},"action":"remove","lines":[">"],"id":371}],[{"start":{"row":236,"column":0},"end":{"row":236,"column":1},"action":"insert","lines":["?"],"id":372}],[{"start":{"row":236,"column":1},"end":{"row":236,"column":2},"action":"insert","lines":[">"],"id":373}],[{"start":{"row":233,"column":4},"end":{"row":233,"column":8},"action":"insert","lines":["    "],"id":374}],[{"start":{"row":233,"column":8},"end":{"row":233,"column":12},"action":"insert","lines":["    "],"id":375}],[{"start":{"row":233,"column":12},"end":{"row":233,"column":16},"action":"insert","lines":["    "],"id":376}],[{"start":{"row":233,"column":16},"end":{"row":233,"column":20},"action":"insert","lines":["    "],"id":377}],[{"start":{"row":233,"column":20},"end":{"row":233,"column":24},"action":"insert","lines":["    "],"id":378}],[{"start":{"row":233,"column":24},"end":{"row":233,"column":28},"action":"insert","lines":["    "],"id":379}],[{"start":{"row":233,"column":28},"end":{"row":233,"column":32},"action":"insert","lines":["    "],"id":380}],[{"start":{"row":234,"column":0},"end":{"row":234,"column":4},"action":"insert","lines":["    "],"id":381}],[{"start":{"row":234,"column":4},"end":{"row":234,"column":8},"action":"insert","lines":["    "],"id":382}],[{"start":{"row":234,"column":8},"end":{"row":234,"column":12},"action":"insert","lines":["    "],"id":383}],[{"start":{"row":234,"column":12},"end":{"row":234,"column":16},"action":"insert","lines":["    "],"id":384}],[{"start":{"row":234,"column":16},"end":{"row":234,"column":20},"action":"insert","lines":["    "],"id":385}],[{"start":{"row":234,"column":20},"end":{"row":234,"column":24},"action":"insert","lines":["    "],"id":386}],[{"start":{"row":234,"column":24},"end":{"row":234,"column":28},"action":"insert","lines":["    "],"id":387}],[{"start":{"row":235,"column":0},"end":{"row":235,"column":4},"action":"insert","lines":["    "],"id":388}],[{"start":{"row":235,"column":4},"end":{"row":235,"column":8},"action":"insert","lines":["    "],"id":389}],[{"start":{"row":235,"column":8},"end":{"row":235,"column":12},"action":"insert","lines":["    "],"id":390}],[{"start":{"row":235,"column":12},"end":{"row":235,"column":16},"action":"insert","lines":["    "],"id":391}],[{"start":{"row":235,"column":16},"end":{"row":235,"column":20},"action":"insert","lines":["    "],"id":392}],[{"start":{"row":235,"column":20},"end":{"row":235,"column":24},"action":"insert","lines":["    "],"id":393}],[{"start":{"row":235,"column":24},"end":{"row":235,"column":28},"action":"insert","lines":["    "],"id":394}],[{"start":{"row":236,"column":0},"end":{"row":236,"column":4},"action":"insert","lines":["    "],"id":395}],[{"start":{"row":236,"column":4},"end":{"row":236,"column":8},"action":"insert","lines":["    "],"id":396}],[{"start":{"row":236,"column":8},"end":{"row":236,"column":12},"action":"insert","lines":["    "],"id":397}],[{"start":{"row":236,"column":12},"end":{"row":236,"column":16},"action":"insert","lines":["    "],"id":398}],[{"start":{"row":236,"column":16},"end":{"row":236,"column":20},"action":"insert","lines":["    "],"id":399}],[{"start":{"row":236,"column":20},"end":{"row":236,"column":24},"action":"insert","lines":["    "],"id":400}],[{"start":{"row":236,"column":24},"end":{"row":236,"column":28},"action":"insert","lines":["    "],"id":401}]]},"ace":{"folds":[],"scrolltop":2820,"scrollleft":0,"selection":{"start":{"row":236,"column":28},"end":{"row":236,"column":28},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":200,"state":"start","mode":"ace/mode/php"}},"timestamp":1512741767933,"hash":"28626fa77335cec47a60266f688ce25021c6cf8b"}