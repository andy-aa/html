<?php

namespace TexLab\Html;

class Table extends AbstractTag
{
    /**
     * @var array<float|int|string>
     */
    protected $headers = [];

    /**
     * @var array<array<float|int|string>>
     */
    protected $tableData = [];

    /**
     * @param array<float|int|string> $headers
     * @return $this
     */
    public function setHeaders(array $headers)
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * @param array<array<float|int|string>> $data
     * @return $this
     */
    public function setData(array $data)
    {
        $this->tableData = $data;

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

    public function html(): string
    {
        return "<table$this->style$this->class$this->id>" . $this->generateTableHtml() . "</table>";
    }
}
