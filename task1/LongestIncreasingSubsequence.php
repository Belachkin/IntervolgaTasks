<?php
// Наибольшая возрастающая подпоследовательность -> Longest increasing subsequence (LIS)
// Напишите код на php, который найдет самую длинную возрастающую последовательность в массиве целых чисел из 100 элементов.

class LIS{


    /**
       * @param int $arrSize
       * @param int $randSize
       * @return array
     */
    public function fillArray(int $arrSize, int $randSize) {
        $arr = []; 

        for($i = 0; $i < $arrSize; $i++) { //заполняем массив случайными числами
        $arr[$i] = rand(1, $randSize);
        } 

        return $arr;
    }

    /**
       * @param array $arr
       * @return array
     */
    public function GetNVP($arr) {

        sort($arr); //сортируем массив по возрастанию
        $arr = array_unique($arr); //удаляем повторяющиеся элементы в массиве

        return $arr;
    }
}

