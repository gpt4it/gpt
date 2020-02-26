<?
class DB {
    function __construct($host, $login, $password, $datebase) {
        $this->DB = new mysqli($host, $login, $password, $datebase);
    }
    function insert($table, $fields) {
        if ($fields["password"]) {
            $fields["password"] = md5($fields["password"]);
        }
        foreach ($fields as $col => $val) {
            $columns[] = "`$col`";
            $values[] = "'$val'";
        }
        $insert = $this->DB->query("insert into `$table`(" . implode(", ", $columns) . ") values (" . implode(", ", $values) . ")");
    }
    function select($table, $filter = []) {
        if ($filter) {
          if ($filter["password"]) {
              $filter["password"] = md5($filter["password"]);
          }
            foreach ($filter as $col => $val) {
                $fields[] = "`$col` = '$val'";
            }
            $where = "where " . implode(' and ', $fields);
        }
        $select = $this->DB->query("select * from `$table` $where");
        while ($row = $select->fetch_assoc()) {
            $result[$row['ID']] = $row;
        }
        return $result;

    }
    function delete($table, $fields) {
        $search = $this->DB->select($table, $fields);
        if($search) {
            $this->DB->query("DELETE FROM `$table` WHERE `ID` = '" . current($search)['ID'] . "'");
        }
    }
    function update($table, $fields) {
        $id = $fields['ID'];
        unset($fields['ID']);
        foreach ($fields as $col => $val) {
            $field[] = "`$col` = '$val'";
        }
        $this->DB->query("UPDATE `$table` SET " . implode(', ', $field) ." WHERE `id` = '$id'");
    }

    function __destruct() {
        $this->DB->close();
    }
}
