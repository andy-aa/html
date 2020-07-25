<?php

namespace TexLab\Html;

class Form extends AbstractTag
{
    use InnerTextTrait;

    protected string $action = " action=''";
    protected string $method = " method='GET'";

    /**
     * @param string $action
     * @return $this
     */
    public function setAction(string $action)
    {
        $this->action = " action='$action'";
        return $this;
    }

    /**
     * @param string $method
     * @return $this
     */
    public function setMethod(string $method)
    {
        if (in_array($method, ['POST', 'GET'])) {
            $this->method = " method='$method'";
        }
        return $this;
    }

    public function html(): string
    {
        return "<form$this->action$this->method$this->style$this->class$this->id>$this->innerText</form>";
    }
}
