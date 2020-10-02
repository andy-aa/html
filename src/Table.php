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
     * @var string
     */
    protected $theadClass = '';

    /**
     * @param string $class
     * @return Table
     */
    public function setTheadClass(string $class = '')
    {
        $this->theadClass = $class == '' ? '' : " class='$class'";

        return $this;
    }

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
     * @param array<float|int|string> $headers
     * @return $this
     */
    public function addHeaders(array $headers)
    {
        $this->headers = array_merge(
            $this->headers,
            $headers
        );

        return $this;
    }

    /**
     * @param array<float|int|string> $columnNames
     * @return Table
     */
    public function removeHeaders(array $columnNames)
    {
        foreach ($columnNames as $column) {
            unset($this->headers[$column]);
        }
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
     * @param array<float|int|string> $columnNames
     * @return $this
     */
    public function removeColumns(array $columnNames)
    {
        foreach ($this->tableData as &$row) {
            foreach ($columnNames as $name) {
                unset($row[$name]);
            }
        }

        $this->removeHeaders($columnNames);

        return $this;
    }

    /**
     * @param array<float|int|string> $column
     * @return $this
     */
    public function addColumn(array $column)
    {
        foreach (array_values($column) as $key => $value) {
            $this->tableData[$key][] = $value;
        }
        return $this;
    }

    /**
     * @param callable ...$fns
     * @return $this
     */
    public function addCalculatedColumn(callable ...$fns)
    {
        foreach ($fns as $fn) {
            foreach ($this->tableData as &$row) {
                /** @var float|int|string $tmp */
                $tmp = $fn($row);
                $row[] = $tmp;
            }
        }

        return $this;
    }

    /**
     * @param callable ...$fns
     * @return $this
     */
    public function addCalculatedRow(callable ...$fns)
    {
        if (!empty($this->tableData[0])) {
            foreach ($fns as $fn) {
                $newRow = [];
                foreach (array_keys($this->tableData[0]) as $key) {
                    /** @var float|int|string $tmp */
                    $tmp = $fn(array_column($this->tableData, $key), $key);
                    $newRow[] = $tmp;
                }

                $this->addRow($newRow);
            }
        }

        return $this;
    }

    /**
     * @param callable ...$fns
     * @return $this
     */
    public function loopByRow(callable ...$fns)
    {
        foreach ($fns as $fn) {
            foreach ($this->tableData as &$row) {
                $fn($row);
            }
        }

        return $this;
    }

    /**
     * @param array<float|int|string> $row
     * @return $this
     */
    public function addRow(array $row)
    {
        $this->tableData[] = $row;

        return $this;
    }

    /**
     * @return string
     */
    protected function generateTableHtml()
    {
        $html = "";

        if (!empty($this->headers)) {
            $html .= "<thead$this->theadClass><tr>";

            foreach ($this->headers as $value) {
                $html .= "<th>$value</th>";
            }

            $html .= "</tr></thead>";
        }

        if (!empty($this->tableData)) {
            $html .= "<tbody>";
            foreach ($this->tableData as $row) {
                $html .= "<tr>";

                foreach ($row as $cell) {
                    $html .= "<td>$cell</td>";
                }

                $html .= "</tr>";
            }
            $html .= "</tbody>";
        }

        return $html;
    }

    public function html(): string
    {
        return "<table$this->style$this->class$this->attrId>" . $this->generateTableHtml() . "</table>";
    }
}
