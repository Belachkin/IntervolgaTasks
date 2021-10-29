<?php
class Pairs{
    /**
       * @param array $arr
       * @return array
     */
    public function GetPairs(array $arr) {
        $arrCountVal = array_count_values($arr); //получаем кол-во одинаковых эелементов
        $result = array(); 
        $temp = 0;

        foreach($arrCountVal as $key => $value) { 
            $temp = $this->GetPair($arrCountVal[$key]); //на каждое число выполняем функцию GetPair()
            $result[$key] = $temp; //вписываем в результат с индексом в котором хранится сам элемент нпо которому считаем пары
        }
              
        return $result;
        
    }

    /**
       * @param int $number
       * @return int
     */
    public function GetPair(int $number) { //возвращает кол-во пар. Пример: 1 1 1 1 (кол-во 4), функция подсчитает как 3+2+1, результат 6 пар
        $result = 0;
        $number -= 1;

        while($number != 0) {
            $result += $number;
            $number -= 1;
        }

        return $result;
    }
}