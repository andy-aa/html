<?php

namespace TexLab\Html;

class TableEdited extends Table
{
    protected $type;

    public function setControllerType(string $type)
    {
        $this->type = $type;
        return $this;
    }

    public function setHeaders(array $headers)
    {
        parent::setHeaders($headers);
        $this->headers .= "\t<th></th>\n\t<th></th>\n";
        return $this;
    }

    public function data(array $data)
    {
        $str = "";

        foreach ($data as $row) {
            $str .= "\t<tr>\n";
            foreach ($row as $key => $cell) {
                if ($key == 'Driver') {
                    $str .= ($cell) ? "\t\t<td>☑</td>\n" : "\t\t<td>️</td>\n";
                } elseif
                ($key == 'status') {
                    switch ($cell) {
                        case 1:
                            $str .= "\t\t<td>⏹</td>\n";
                            break;
                        case 2:
                            $str .= "\t\t<td>▶</td>\n";
                            break;
                        case 3:
                            $str .= "\t\t<td>⏸️</td>\n";
                            break;
                        case 4:
                            $str .= "\t\t<td>✅</td>\n";
                            break;
                    }
                } else {
                    $str .= "\t\t<td>$cell</td>\n";
                }
            }

//            $str .= "\t\t<td><a href='?action=del&type=$this->type&id=$row[id]'>🗑️</a></td>\n";
//            $str_a = "<a onclick='return confirm(\"Удалить запись из БД?\")' href='http://ya.ru'>🗑️</a>";
            $str_a = "<a onclick='return confirm(\"Удалить запись из базы данных?\")' href='?action=del&type=$this->type&id=$row[id]'>🗑️</a>";
            $str .= "\t\t<td>$str_a</td>\n";
            $str .= "\t\t<td><a href='?action=showedit&type=$this->type&id=$row[id]'>✏</a></td>\n";
            $str .= "\t</tr>\n";
        }

        $this->data = $str;
        return $this;
    }
}
