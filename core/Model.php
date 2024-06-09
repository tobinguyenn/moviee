<?php

namespace Core;

use Core\Database\Database;

class Model implements \JsonSerializable
{
    private $data = [];

    protected $table;
    protected $primaryKey = 'id';
    protected $fillable = [];
    protected \Core\Database\Database $db;
    protected static $instance;

    protected $columns = ['*'];

    public function __construct()
    {
        $class = explode('\\', get_class($this));
        $className = end($class);
        $this->table = strtolower($className) . 's';
        $this->db = Database::getInstance();
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        return null;
    }

    public function jsonSerialize(): mixed
    {
        return $this->data;
    }

    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    private function getColumns()
    {
        return implode(', ', $this->columns);
    }

    public function select(array $columns = ['*'])
    {
        $this->columns = $columns;
        return $this;
    }

    public static function all()
    {
        $instance = static::getInstance();
        $query = "SELECT {$instance->getColumns()} FROM {$instance->table}";
        $result = $instance->db->query($query);

        $records = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $model = new static;
            foreach ($row as $key => $value) {
                $model->$key = $value;
            }
            $records[] = $model;
        }

        return $records;
    }

    public static function find($id)
    {
        $instance = static::getInstance();
        $query = "SELECT {$instance->getColumns()} FROM $instance->table WHERE $instance->primaryKey = $id";
        $result = $instance->db->query($query);

        if ($row = mysqli_fetch_assoc($result)) {
            $model = new static;
            foreach ($row as $key => $value) {
                $model->$key = $value;
            }
            return $model;
        }

        return null;
    }
}
