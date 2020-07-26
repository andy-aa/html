<?php

namespace TexLab\Html;

class Table extends AbstractTag
{
    protected string $tableData = '';
    protected string $headers = '';

    /**
     * @param array<string> $headers
     * @return $this
     */
    public function setHeaders(array $headers)
    {
        $this->headers = "\n<tr>\n";

        foreach ($headers as $value) {
            $this->headers .= "\t<th>$value</th>\n";
        }

        $this->headers .= "</tr>\n";

        return $this;
    }

    /**
     * @param string[][] $data
     * @return $this
     */
    public function setData(array $data)
    {
        $this->tableData = "";

        foreach ($data as $row) {
            $this->tableData .= "<tr>\n";

            foreach ($row as $cell) {
                $this->tableData .= "\t<td>$cell</td>\n";
            }

            $this->tableData .= "</tr>\n";
        }

        return $this;
    }

    public function html(): string
    {
        return "<table$this->style$this->class>$this->headers$this->tableData</table>";
    }
}
