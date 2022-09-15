<?php

namespace App\Classes;
// use App\Traits\Inputs;

class FormBuilder 
{
    use \App\Traits\Inputs;
    // use Inputs;

    public function open(string $action, string $method): string 
    {
        $this->action = $action;
        $this->method = $method;
        return "<form action=\"$this->action\" method=\"$this->method\">\n";
    }

    public function submit(string $value): string 
    {
        if(!empty($value)) {
            $this->value = $value;
        } else {
            $value = 'Submit';
        }
        return "\t<button type=\"submit\">$value</button>\n";
    }

    public function close(): string 
    {
        return "</form>\n";
    }

}