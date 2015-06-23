<?php

class AddStudentModel {
    public $validator;
    public $lib;
    public $db;

    public function __construct(){
        $this->validator = new Validator();
        $this->lib = new Lib();
        $this->db = new MyPDO();
    }

    public function AddNewStudent()
    {
        $public = $this->lib->getPublic();
        $this->validator->setFields([
            'name',
            'surname',
            'sex',
            'age',
            'group',
            'faculty'
        ]);

        if ($this->validator->fails()) {
            $errors = $this->validator->getErrors();
            echo $errors;

        } else {
            $data = $this->validator->getData();
            $this->db->insert($data);
            header('Location: /'.$public .'/addstudent');
        }
    }

    public function ShowAllStudents()
    {
        $result = $this->db->query('SELECT * FROM studentlist');
        return $result;
    }

    public function ShowStudentById()
    {
        $id = $this->lib->getValue();

        $result = $this->db->getById('SELECT * FROM studentlist WHERE id=:id', $id);
        return $result;
    }

    public function ChangeStudent()
    {
        $public = $this->lib->getPublic();
        $id = $this->lib->getValue();

        $this->validator->setFields([
            'name',
            'surname',
            'sex',
            'age',
            'group',
            'faculty'
        ]);

        if ($this->validator->fails()) {
            $errors = $this->validator->getErrors();
            echo $errors;

        } else {
            $data = $this->validator->getData();
            $this->db->update($data, $id);
            header('Location: /'.$public .'/addstudent');
        }
    }

    public function DeleteStudent()
    {
        $action = $this->lib->getAction();
        $value = $this->lib->getValue();

        if ($action == 'deleteStudent'){
            $this->db->delete($value);
        }
    }
}