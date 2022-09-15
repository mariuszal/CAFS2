<?php
// namespace Builder\Inputss;

trait Inputs 
{
    public function label(string $labelId): string 
    {
        $this->labelId = $labelId;
        return "\t<label for=\"$this->labelId\">\n";
    }

    public function input(string $type, string $value, string $name): string
    {
        $this->type = $type;
        $this->value = $value;
        $this->name = $name;
        return "\t<input type=\"$this->type\" value=\"$this->value\" name=\"$this->name\">\n";
    }

    public function password(string $value): string 
    {
        $this->input('password', $value, '');
    }

    public function textarea(string $textValue): string
    {
        $this->textValue = $textValue;
        return "\t<textarea placeholder=\"$this->textValue\"></textarea>\n";
    }

}
