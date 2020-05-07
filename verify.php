<?php 
  $access_token = 'NwxaG9+lpv0OhIDlXxUH4mSrCoB4Pg9OSx5oCG8aPfzhOT4reXlgdf5pRkTKOLRa54bSzc5OsxkOVPpkVhyiw5VQyTljKch7Qm2GuzAXbOEN2Qp9Rwpn8rVepq4VkScSF5wdVP1k90rsEvg4QK1RNQdB04t89/1O/w1cDnyilFU=';
  $url = 'https://api.line.me/v1/oauth/verify';
  $headers = array('Authorization: Bearer ' . $access_token);
  $ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $result = curl_exec($ch);curl_close($ch);
  echo $result;