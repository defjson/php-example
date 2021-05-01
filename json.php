<?php

# curl https://php.loadfunc.com/load_func.php --output load_func.php
# curl https://loadfunc.github.io/php/load_func.php --output load_func.php
include 'load_func.php';

# Webs service with JSON
try {

    # Load functions from remote/local
    load_func(['https://php.letjson.com/let_json.php', 'https://php.defjson.com/def_json.php', 'https://php.apisql.com/api_sql.php'], function ($func_url_array) {

        // encode data to json
        def_json('', $func_url_array, function ($json) {

            // show header with json data
            header('Content-Type: application/json');
            echo $json;

        });
    });

} catch (exception $e) {
    # Set HTTP response status code to: 500 - Internal Server Error
    http_response_code(500);
}
