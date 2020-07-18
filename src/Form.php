<?php

namespace TexLab\Html;

class Form extends AbstractTag
{
    use InnerTextTrait;

    protected $action = '';
    protected $method = 'GET';

    public function setAction(string $action)
    {
        $this->action = $action;
        return $this;
    }

    public function setMethod($method)
    {
        if (in_array($method, ['POST', 'GET'])) {
            $this->method = $method;
        }
        return $this;
    }

    public function html()
    {
        return "<form action='$this->action' method='$this->method'$this->class$this->style>\r\n$this->innerText</form>";
    }
}
