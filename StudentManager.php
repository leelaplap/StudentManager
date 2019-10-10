<?php


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

    public function saveDataToFileJon($data)
    {
        $currentData = $this->readFileJson($this->path);
        array_push($currentData, $data);
        $newData = json_encode($currentData);
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

        $this->saveDataToFileJon($arr);
    }

    public function getListStudent()
    {
        $arr = $this->readFileJson($this->path);

        $studentList= [];
        foreach ($arr as $item){
            $students = new Student($item["name"],$item["age"],$item["phone"],$item["class"]);
            array_push($studentList,$students);
        }

        return $studentList;
    }
}