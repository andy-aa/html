<?php

namespace TexLab\Html;

class Table extends AbstractTag
{
    /**
     * @var string[][]
     */
    protected $tableData = [];
    /**
     * @var string[]
     */
    protected $headers = [];

    /**
     * @param array<string> $headers
     * @return $this
     */
    public function setHeaders(array $headers)
    {
        $this->headers = $headers;

        return $this;
    }


    /**
     * @return string
     */
    protected function generateTableHtml()
    {
        $html = "";

        if (!empty($this->headers)) {
            $html .= "\n<tr>\n";

            foreach ($this->headers as $value) {
                $html .= "\t<th>$value</th>\n";
            }

            $html .= "</tr>\n";
        }

        if (!empty($this->headers)) {
            foreach ($this->tableData as $row) {
                $html .= "<tr>\n";

                foreach ($row as $cell) {
                    $html .= "\t<td>$cell</td>\n";
                }

                $html .= "</tr>\n";
            }
        }

        return $html;
    }

    /**
     * @param string[][] $data
     * @return $this
     */
    public function setData(array $data)
    {
        $this->tableData = $data;

        return $this;
    }

    public function html(): string
    {
        return "<table$this->style$this->class>" . $this->generateTableHtml() . "</table>";
    }
}
