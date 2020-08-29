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
            $html .= "<tr>";

            foreach ($this->headers as $value) {
                $html .= "<th>$value</th>";
            }

            $html .= "</tr>";
        }

        if (!empty($this->tableData)) {
            foreach ($this->tableData as $row) {
                $html .= "<tr>";

                foreach ($row as $cell) {
                    $html .= "<td>$cell</td>";
                }

                $html .= "</tr>";
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
        return "<table$this->style$this->class$this->id>" . $this->generateTableHtml() . "</table>";
    }
}
