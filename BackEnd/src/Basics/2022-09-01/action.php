<?php

function putUrl(string $url) {
    $links = json_decode(file_get_contents('./data/list.json'),true);
    if(verifyUrlExists($url) == true) {
        do {
            $hash = substr(md5($url.mt_rand()),0,6);
        } while (array_key_exists($hash, $links));

        $links[$hash] = $url;

        if (file_put_contents('./data/list.json', json_encode($links))) {
            // return $hash;
            return $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] . "?code=" . $hash;
        } else {
            return null;
        }
    } else {
        // $_SESSION['error'] = 1;
        return "bad url";
    }
}

function getUrl(string $hash) {
    $links = json_decode(file_get_contents('./data/list.json'),true);
    if (array_key_exists($hash, $links)) {
        return $links[$hash];
    }
    return null;
}

function verifyUrlExists(string $url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_setopt($ch,  CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    $response = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return (!empty($response) && $response != 404);
}