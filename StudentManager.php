<?php
include_once "User.php";
include_once "Student.php";

class StudentManager
{
    public $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function readFileJson($path)
    {
        $dataFile = file_get_contents($this->path);
        return json_decode($dataFile, true);
    }

    public function addDataToJson($data)
    {
        $currentData = $this->readFileJson($this->path);
        array_push($currentData, $data);
        $this->saveFile($currentData);
    }

    public function saveFile($data)
    {
        $newData = json_encode($data);
        file_put_contents($this->path, $newData);
    }

    public function add($student)
    {
        $arr = [
            "name" => $student->getName(),
            "age" => $student->getAge(),
            "phone" => $student->getPhone(),
            "class" => $student->getClass()
        ];

        $this->addDataToJson($arr);
    }

    public function getListStudent()
    {
        $arr = $this->readFileJson($this->path);
        $studentList = [];
        foreach ($arr as $item) {
            $students = new Student($item["name"], $item["age"], $item["phone"], $item["class"]);
            array_push($studentList, $students);
        }
        return $studentList;
    }


    public function getStudentsIndex($index)
    {
        $students = $this->getListStudent();
        return $students[$index];
    }

    public function delete($index)
    {
        $listStudent = $this->getListStudent();
        array_splice($listStudent, $index, 1);

         $this->saveFile($listStudent);
    }

    function edit($index, $newData)
    {
        $listStudents = $this->getListStudent();
        $listStudents[$index] = $newData;
        $this->saveFile($listStudents);

    }
}