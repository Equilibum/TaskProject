<?php

class AddStudentController{

    public $student;
    public $lib;

    public function __construct()
    {
        /*Подключаем модель и нашу библиотеку*/
        $this->student = new AddStudentModel();
        $this->lib = new Lib();

    }

    public function index()
    {
        /*Узнаем данные всех студентов для вывода*/
        $result = $this->student->ShowAllStudents();
        /*Если идет POST запрос, проверяем на валидность данных в форме и если они подходят - добавляем студента*/
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->student->AddNewStudent();
        }
        return $this->lib->view('AddStudentView', $result);
    }

    public function deleteStudent()
    {
        /*Удаляем пользователя, данные удаляемого пользователя узнаем через URI - Функция explode*/
        $this->student->DeleteStudent();
    }

    public function changeStudent()
    {
        /*Узнаем информацию о пользователе для редактирования через его ID*/
        $result = $this->student->ShowStudentById();

        /*Когда идет POST запрос с страницы редактирования,
        делаем проверку на валидность данных и если они подходят, то меняем данные на указанные*/
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->student->ChangeStudent();
        }
        return $this->lib->view('ChangeStudentView', $result);
    }
}