<?php

namespace TexLab\Html;

class Form extends AbstractPairedTag
{
    use InnerTextTrait;

    /**
     * @var string
     */
    protected $attrAction = " action=''";

    /**
     * @var string
     */
    protected $attrMethod = " method='GET'";

    /**
     * @var string
     */
    protected $attrEnctype = "";

    /**
     * @param string $action
     * @return $this
     */
    public function setAction(string $action)
    {
        $this->attrAction = " action='$action'";
        return $this;
    }

    /**
     * @param string $method
     * @return $this
     */
    public function setMethod(string $method)
    {
        if (in_array($method, ['POST', 'GET'])) {
            $this->attrMethod = " method='$method'";
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
            $this->attrEnctype = " enctype='$enctype'";
        }
        return $this;
    }

    public function html(): string
    {
        return '<form' . parent::attr() . ">$this->innerText</form>";
    }
}
