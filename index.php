<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Задание 2</title>
    <script type="text/javascript">
        var arr = [                                                                                                     //создаем шахматный массив arr
            ["A1", "A2", "A3", "A4", "A5", "A6", "A7", "A8"],
            ["B1", "B2", "B3", "B4", "B5", "B6", "B7", "B8"],
            ["C1", "C2", "C3", "C4", "C5", "C6", "C7", "C8"],
            ["D1", "D2", "D3", "D4", "D5", "D6", "D7", "D8"],
            ["E1", "E2", "E3", "E4", "E5", "E6", "E7", "E8"],
            ["F1", "F2", "F3", "F4", "F5", "F6", "F7", "F8"],
            ["G1", "G2", "G3", "G4", "G5", "G6", "G7", "G8"],
            ["H1", "H2", "H3", "H4", "H5", "H6", "H7", "H8"]
        ];

        let input;                                                                                                      //введенное значение
        let pos = [];                                                                                                   //массив для хранения индекса


        function chess(form) {                                                                                          //функция chess, принимает value из формы
            input = document.getElementById("pos").value;                                                               //input равно значение из pos

            function indexsearch(inputArray, searchValue) {                                                             //indexsearch принимает в параметры массив и value
                for (let i = 0, L = inputArray.length; i < L; i++) {                                                    //перебирает элемегты массива
                    let j = inputArray[i].indexOf(searchValue);                                                         //присваивает j значение indexof
                    if (j >= 0) {
                        return [i, j];                                                                                  //возвращант позицию элемента в массиве
                    }
                    ;
                }
                return null;
            };

            pos = indexsearch(arr, input);                                                                              //определяем с помощью indexsearch индекс введенного элемента pos


            let x = pos[0];
            let y = pos[1];
            let posXY = [];
            let xx, yy;
            let a = [];



            if (x + 2 < 8 && y + 1 < 8) {
                posXY = [x + 2, y + 1];
                xx = posXY[0];
                yy = posXY[1];
                if (xx < 0 || yy < 0) {
                    a[0] = " ";
                } else {
                    a[0] = arr[xx][yy];
                }
            }                                                                           //условиями хода коня подставляем индксы в массив и если
                                                                                                                        //значения удовлетворяются - выводим алертом на экран
            if (x + 2 < 8 && y - 1 < 8) {
                posXY = [x + 2, y - 1];
                xx = posXY[0];
                yy = posXY[1];
                if (xx < 0 || yy < 0) {
                    a[1] = " ";
                } else {
                    a[1] = arr[xx][yy];
                }
            }

            if (x - 2 < 8 && y + 1 < 8) {
                posXY = [x - 2, y + 1];
                xx = posXY[0];
                yy = posXY[1];
                if (xx < 0 || yy < 0) {
                    a[2] = " ";
                } else {
                    a[2] = arr[xx][yy];
                }
            }

            if (x - 2 < 8 && y - 1 < 8) {
                posXY = [x - 2, y - 1];
                xx = posXY[0];
                yy = posXY[1];
                if (xx < 0 || yy < 0) {
                    a[3] = " ";
                } else {
                    a[3] = arr[xx][yy];
                }
            }

            if (x + 1 < 8 && y + 2 < 8) {
                posXY = [x + 1, y + 2];
                xx = posXY[0];
                yy = posXY[1];
                if (xx < 0 || yy < 0) {
                    a[4] = " ";
                } else {
                    a[4] = arr[xx][yy];
                }
            }

            if (x + 1 < 8 && y - 2 < 8) {
                posXY = [x + 1, y - 2];
                xx = posXY[0];
                yy = posXY[1];
                if (xx < 0 || yy < 0) {
                    a[5] = " ";
                } else {
                    a[5] = arr[xx][yy];
                }
            }

            if (x - 1 < 8 && y + 2 < 8) {
                posXY = [x - 1, y + 2];
                xx = posXY[0];
                yy = posXY[1];
                if (xx < 0 || yy < 0) {
                    a[6] = " ";
                } else {
                    a[6] = arr[xx][yy];
                }
            }

            if (x - 1 < 8 && y - 2 < 8) {
                posXY = [x - 1, y - 2];
                xx = posXY[0];
                yy = posXY[1];
                if (xx < 0 || yy < 0) {
                    a[7] = '';
                } else {
                    a[7] = arr[xx][yy];
                }
            }

            alert('Возможные варианты ходов: ' + (a.join(" ")));                                                        // выводит все значения а - которые удовлетворяют условиям
        }
    </script>
</head>
<body>
    <form onsubmit="return false;">
        <label for="position"><b>Исходное положение</b></label><br />
        <input type="text" name="position"  placeholder="Введите положение на доске" id="pos" /><br />
        <input type="submit" name="submit" value="OK" onclick="chess();" /> <br />   <!-- кнопка запускает функцию chess(); -->
    </form>
</body>
</html>