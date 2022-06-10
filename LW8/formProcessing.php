<?php

class Course
{
    private const PATH = "./data/";
    private const FORMAT = ".txt";
    private const SEPARATOR = "\n";

    private string $name;
    private string $email;
    private string $activity;
    private string $filename;

    private array $arrayData;

    public function __construct()
    {
        $this->name = $_POST["name"] ?? "";
        $this->email = $_POST["email"] ?? "";
        $this->activity = $_POST["activity"] ?? "";

        if ($this->email !== "")
        {
            $this->filename = self::PATH . $this->email . self::FORMAT;
        } 
        else
        {
            $this->filename = "";
        }
    }

    public function SaveForm()
    {
        $arrayData = 'Email: ' . $this->email . self::SEPARATOR;
        $arrayData .= 'Имя: ' . $this->name . self::SEPARATOR;
        $arrayData .= 'Активность: ' . $this->activity . self::SEPARATOR;

        if ($this->filename !== "")
        {
            file_put_contents($this->filename, $arrayData);
        } 
        else
        {
            echo "Email не корректен";
        }
    }
}

$course = new Course();

$course->SaveForm();