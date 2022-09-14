<?php

interface Messenger 
{
    public function send(string $client, string $text);
}