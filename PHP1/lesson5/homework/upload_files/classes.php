<?php

class Uploader
{   
    protected $mass;  //свойство класса, в котором будет содержаться массив данных о загруженном файле
    protected $flag;    //Флаг проверки загрузки файла(успешно загружен или нет)

    //Конструктор будет принимать имя поля формы и формировать массив данных информации о загруженном файле,
    //взятый из глобального массива $_FILES
    public function __construct($tmp1) {
        $this->mass = $_FILES[$tmp1];
    }

    public function isUploaded() {
        if ($this->mass['error'] == 0) {
            $this->flag = 0;    //Флаг = 0 Файл загружен
        } else {
            $this->flag = 1;    //Флаг = 1 Файл не загружен
        }
    }

    public function upload() {
        if ($this->flag == 0) {    //если флаг = 0, т.е. файл загружен, то будет функция переноса файла из одного места в другое
            move_uploaded_file(
                $this->mass['tmp_name'],
                __DIR__ . '/images/' . $this->mass["name"]
            );
            echo 'Файл ' . $this->mass["name"] . ' успешно загружен';
        } else {
            echo 'Пожалуйста, повторите загрузку файла';
        }
    }

}