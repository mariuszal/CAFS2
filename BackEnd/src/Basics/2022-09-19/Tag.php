<?php

class Tag {

    public function __construct(public string $tag)
    {
        $this->tag = $tag;
    }

    public function setText(string $text)
    {
        $this->text = $text;
        return $this;
    }    

    public function setAttr(string $attr, string $value)
    {
        $this->attr = $attr;
        $this->value = $value;
        // return $this->attr . "=\"" . $this->value . "\"";
        return $this;
    }

    public function get(): string
    {
        return sprintf('<%s %s="%s">%s</%s>', $this->tag, $this->attr, $this->value, $this->text,$this->tag);
    }

    public function show()
    {
        echo $this->get();
    }


}