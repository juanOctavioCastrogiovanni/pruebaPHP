<?php
define("DIR_RAIZ", "/prubaPHP");

define("FRONT_END_PATH", $_SERVER["DOCUMENT_ROOT"] . DIR_RAIZ);

define("BACK_END_PATH", FRONT_END_PATH . "/admin");

define("BACK_END_URL", FRONT_END_URL . "/admin");

define("FRONT_END_URL", $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . DIR_RAIZ);

define("UPLOAD_FILES_PATH", FRONT_END_URL. "/upload/archivos");

define("UPLOAD_FILE_RELATIVE", "../upload/archivos");

define("UPLOAD_UPLOAD_PATH", FRONT_END_URL. "/upload/docentes");

define("UPLOAD_UPLOAD_RELATIVE", FRONT_END_URL. "../upload/docentes");


?>