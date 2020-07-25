<?php

namespace TexLab\Html;

class Form extends AbstractTag
{
    use InnerTextTrait;

    protected $action = " action=''";
    protected $method = " method='GET'";

    public function setAction(string $action)
    {
        $this->action = " action='$action'";
        return $this;
    }

    public function setMethod($method)
    {
        if (in_array($method, ['POST', 'GET'])) {
            $this->method = " method='$method'";
        }
        return $this;
    }

    public function html()
    {
        return "<form$this->action$this->method$this->style$this->class$this->id>$this->innerText</form>";
    }
}
