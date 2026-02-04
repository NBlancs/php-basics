<?php

try {
    if (!file_exists("config.txts")) { // will return not found since there is no txts file hehe
        throw new Exception(" File not found");
    }
} catch (Exception $e) {
    echo "Error" . $e-> getMessage();
}

