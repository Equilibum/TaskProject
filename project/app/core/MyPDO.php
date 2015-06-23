<?php

class MyPDO {

    public $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=students', 'root', '');
    }

    public function query($sql)
    {
        $row = $this->db->prepare($sql);
        $row->execute();
        $result = $row->fetchAll();
        return $result;
    }

    public function getById($sql, $id)
    {
        $db = $this->db->prepare($sql);
        $db->execute([':id' => $id]);
        $result = $db->fetchAll();
        return $result;
    }

    public function insert($values = [])
    {
        $sql = 'INSERT INTO studentlist (name, surname, sex, age, groups,  faculty) VALUES (:name, :surname, :sex, :age, :groups, :faculty)';
        $insert = $this->db->prepare($sql);
        $insert->execute([
            ':name' => $values['name'],
            ':surname' => $values['surname'],
            ':sex' => $values['sex'],
            ':age' => $values['age'],
            ':groups' => $values['group'],
            ':faculty' => $values['faculty']
        ]);
    }

    public function update($values = [], $id)
    {
        $sql = 'UPDATE studentlist SET name = :name, surname = :surname, sex = :sex, age = :age, groups = :groups, faculty = :faculty WHERE id = :id';
        $insert = $this->db->prepare($sql);
        $insert->execute([
            ':name' => $values['name'],
            ':surname' => $values['surname'],
            ':sex' => $values['sex'],
            ':age' => $values['age'],
            ':groups' => $values['group'],
            ':faculty' => $values['faculty'],
            ':id' => $id
        ]);
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM studentlist WHERE id=:id';
        $delete = $this->db->prepare($sql);
        $delete->execute([':id' => $id]);
        header('Location: /q/addstudent ');
    }
}