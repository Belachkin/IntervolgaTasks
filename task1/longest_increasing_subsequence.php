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
    public function GetNVP(array $arr) {
        $searchStart = 0;
        $searchEnd = 0;

        $start = 0;
        $end = 0;

        for($i = 1; $i < count($arr); ++$i) {
            if($arr[$i] <= $arr[$i - 1]) {
                if($end - $start > $searchEnd - $searchStart) {
                    $searchEnd = $end;
                    $searchStart = $start;
                }

                $end = $i;
                $start = $i;
            }
            else {
                $end = $i;
            }
        }

        $result = [$searchEnd - $searchStart + 1];
        for($i = $searchStart; $i <= $searchEnd; ++$i) {
            $result[$i - $searchStart] = $arr[$i];
        }

        return $result;
    }
}

