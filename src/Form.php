<?php

namespace TexLab\Html;

class Form extends AbstractTag
{
    use InnerTextTrait;

    /**
     * @var string
     */
    protected $action = " action=''";

    /**
     * @var string
     */
    protected $method = " method='GET'";

    /**
     * @var string
     */
    protected $enctype = "";

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

    /**
     * @param string $enctype
     * @return $this
     */
    public function setEnctype(string $enctype)
    {
        if (in_array($enctype, ['application/x-www-form-urlencoded', 'multipart/form-data', 'text/plain'])) {
            $this->enctype = " enctype='$enctype'";
        }
        return $this;
    }

    public function html(): string
    {
        return "<form$this->action$this->method$this->enctype$this->style$this->class$this->attrId>$this->innerText</form>";
    }
}
