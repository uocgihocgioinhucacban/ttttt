<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BÀI TẬP VỀ NHÀ BUỔI THỨ 3 PHP</title>
</head>
<?php
//1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
//IDEA: Dùng if - else. Nếu Chia hết cho 2 dư không là số chẵn --Ngược lại là số lẻ
function checkEven($number){
    if(!is_integer($number))
        echo "Số " . $number . " không phải là số nguyên. Vui lòng nhập số nguyên";
    else if($number % 2 == 0)
        echo "Số " . $number . " là số chẵn";
    else 
        echo "Số " . $number . " không phải số chẵn";
}
$number = 88;
echo "Kết quả: ";
echo checkEven($number);

//2. Viết chương trình PHP để tính tổng của các số từ 1 đến n.
/* IDEA: Lặp lại ----Dùng for
chạy từ 1 đến n
in ra tổng, gán biến tổng ban đầu là 0
*/
function sumNumber($n){
    if(!is_integer($n) && $n<=0){
        return false;
    }
    else{
        $sum = 0;
        for($i = 1; $i<=$n; $i++)
        $sum += $i;
        return $sum;
    }
}
$n = 9;
if(sumNumber($n) !== false)
    echo "Tổng từ 1 đến " . $n . " là: " . sumNumber($n);
else
    echo "Số " . $n . " không phải là số nguyên dương. Vui lòng nhập số nguyên dương";

//3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
function multiplicationTable($n) {
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= $n; $j++) {
            $tich = $i * $j;
echo "$i x $j = $tich <br>";
}
}
}
echo multiplicationTable(10);
/*IDEA
Bảng cửu chương có tính nhân lặp lại tăng dần   1x1=1    1x2=2    2x1=1    2x2=4
Bảng tăng từ 1 ---10. Số tăng 1 --10
Dung for lồng nhau
- for 1: Xác định bảng cc từ 1-10
for 2: số lần nhân trong mỗi bảng 1 ---10  
-  */

// 4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không. -->
function checkString($string1, $string2) {
    $check = strpos($string1, $string2);
if ($check !== false) {
        echo "Chuỗi '$string1' chứa từ '$string2'.";
} else {
        echo "Chuỗi '$string1' không chứa từ '$string2'.";
}
}
$string1 = "Presentation"; 
$string2= "a"; 
echo checkString($string1, $string2);
/*IDEA
Dùng
 - Hàm strpos dùng để tìm vị trí xuất hiện đầu tiên của một chuỗi con trong chuỗi cho trước 
 - if - else
 - TH: NẾU 2 chuỗi trên bằng nhau về cả giá trị và kiểu: thì trả về false
 !==  : kHÔNG BẰNG ---Nếu không bằng nhau trả về TRUE - CÒN NẾU BẰNG NHAU TRẢ VỀ FALSE -
 - strpos PHÂN BIỆT CHỮ HOA+ CHỮ THƯỜNG*/
 

//5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
function findMinMax($array){
    $min = $array[0];
    $max = $array[0];
    foreach($array as $value){
        if($min > $value) $min = $value;
        if($max < $value) $max = $value;
    }
    return [$max,$min];
    // echo "Giá trị nhỏ nhất của mảng là: " . $min . "<br>";
    // echo "Giá trị lớn nhất của mảng là: " . $max . "<br>";
}
$arrTest = [1, -9, 2, 5, 3, 77];
echo "Mảng nhập vào: ";
foreach($arrTest as $value)
    echo $value . " ";
echo "<br>";
echo "Giá trị lớn nhất của mảng là: " . findMinMax($arrTest)[0];

/* IDEA
Tìm kiến lần lượt trong một mảng --->Dùng lặp ----MẢNG --Dùng foreach 
CT   foreach ($mang AS $key =>$value)*/

/*6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.*/
//C1
function sortArray($arrs){
    $count = count($arrs);
    for($i=0; $i<$count; $i++)
        for($j=$i+1; $j<$count; $j++)
            if($arrs[$i]>$arrs[$j]){
                $temp = $arrs[$i];
                $arrs[$i] = $arrs[$j];
                $arrs[$j] = $temp;
            }
    return $arrs;
}
$arrTest = [1,9,2,5,3,7];
echo "Mảng ban đầu: ";
foreach($arrTest as $arr)
    echo $arr . " ";
echo "<br> Mảng theo thứ tự tăng dần: ";
$sortTest = sortArray($arrTest);
foreach($arrTest as $value)
        echo $value . " ";
 /*IDEA
 - Sắp xếp theo thứ tự tăng dần dùng -----FOR----
 - Lặp lại trong một mảng dùng FORECH  */

//7. Viết chương trình PHP để tính giai thừa của một số nguyên dương. 
function factorialCalculation($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorialCalculation($n - 1);
    }
}
$number = 3; 
$factorial = factorialCalculation($number);
echo "Giai thừa của $number là: $factorial";

//8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function primeNumber($min, $max){
    for($i=$min+1; $i<$max; $i++){
        $count = 0;
        for($j=1; $j<=$i; $j++){
            if($i%$j == 0)  $count++;
        }
        if($count == 1 || $count == 2) echo $i . " ";
    }
}
$min = -5;
$max = 100;
echo "Khoảng nhập vào: (" . $min . ";" . $max . ")<br>";
echo "Kết quả: ";
echo primeNumber($min, $max);

//9. Viết chương trình PHP để tính tổng của các số trong một mảng. 
function sumArray($array) {
    $sum = 0;
    foreach ($array as $value) {
        $sum += $value;
    }
    return $sum;
}
$array = [1,-3,5]; 
$sum = sumArray($array);
echo "Tổng của các số trong mảng là: $sum";

//10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước. 
function printFibonacci($min, $max){
    for($i=2; $i<=$max; $i++){
        $arr[0] = 0;
        $arr[1] = 1;
        $arr[$i] = $arr[$i-1] + $arr[$i-2];
    }
    foreach($arr as $value)
        if($value>$min && $value<$max)
            echo $value . " ";
}
echo "Khoảng: (" . $min . ";" . $max . ") <br>";
echo "Các số Fibonacci trong dãy là: ";
echo printFibonacci($min, $max);

//11.Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function checkAmstrong($number){
    $temp = $number;
    $sum = 0;
    if(!is_integer($number) || $number <= 0)
        echo "Số Amstrong phải là số nguyên. Nhập lại số đi há";
    else if($number>3 && $number<10){
        echo "Số " . $number . " không phải số Amstrong";
    }
    else{
        while($temp!=0){
            $x = $temp % 10;
            $sum += pow($x,strlen($number));
            $temp = $temp / 10;
        }
        if($number == $sum)
            echo "Số " . $number . " là số Amstrong";
        else 
            echo "Số " . $number . " không phải số Amstrong";
    }
}
$number = 15;
echo "Số cần xét: " . $number . "<br>";
echo "Kết quả: ";
echo checkAmstrong($number);

//12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function insertToArray($arrs, $value, $index){
    $count = count($arrs);
    $newArrs = [];
    for($i = $index; $i <= $count; $i++)
        $newArrs[$i - $index] = $arrs[$i - 1];
    $arrs[$index-1] = $value;
    for($i = $index; $i <= $count; $i++)
        $arrs[$i] = $newArrs[$i-$index];
    return $arrs;
}
$arrs = array(1, 4, 9);
echo "Mảng nhập vào: ";
foreach($arrs as $value)
    echo $arrs . " ";
echo "<br>";
$insertArrs = 20;
$pos = 1;
echo "Phần tử muốn thêm: " . $insertArrs . "<br> Vị trí muốn thêm: " . $pos . "<br>";
$cars = insertToArray($arrs, $insertArrs, $pos);
echo "Kết quả: ";
foreach($arrs as $value)
    echo $value . " ";

//13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function deleteDuplicateArr($array){
    $newArray = []; 
        for ($i = 0; $i < count($array); $i++){
            for($j = 0; $j < count($newArray) + 1; $j++){
                if($j == count($newArray)){
                    $newArray[$j] = $array[$i];
                    break;
                    }
                if($newArray[$j] == $array[$i]){
                    break;
                    }
                }
        }
        return $newArray;
}
$array = array(- 1, 99, 3, 4, 99, 3, 5);
echo "Mảng ban đầu: ";
foreach($array as $value)
    echo $value . " ";
echo "<br>Mảng sau khi loại bỏ các phần tử trùng lặp: ";
    $array = deleteDuplicateArr($array);
    foreach($array as $value)
        echo $value . " ";
//14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function findPosition($value, $arrs){
    $count = count($arrs);
    for($i = 0; $i < $count; $i++)
        if($value == $arrs[$i])
            return $i+1;
}
echo "Mảng nhập vào: ";
foreach($color as $value)
    echo $value . " ";
echo "<br>";
$color = "blue";
echo "Phần tử muốn tìm: " . $color . "<br>";
echo "Vị trí: " . findPosition($value, $color);

//15. Viết chương trình PHP để đảo ngược một chuỗi. 
function revString($string){
    $newStr = "";
    for($i = strlen($string)-1; $i >= 0; $i--)
        $newStr .= $string[$i];
    return $newStr;
}
$string = "Thuong Mai University";
echo "Chuỗi ban đầu: " . $string . "<br>";
$reversedString = revString($string);
echo "Chuỗi đảo ngược: " . $reversedString;

//16. Viết chương trình PHP để tính số lượng phần tử trong một mảng. 
function countElements($arr) {
    $count = 0;
    foreach($arr as $element) {
      $count++;
    }
    return $count;
  }
// Sử dụng hàm để tính số lượng phần tử trong mảng
$myArray = array(1, 2, 3, 4, 5);
  echo "Số lượng phần tử trong mảng là: " . countElements($myArray);

//17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không. 
function isPalindrome($str) {
    $len = 0;
    $arr = array();
    for ($i = 0; isset($str[$i]); $i++) {
      $len++;
      $arr[] = $str[$i];
    }
    for ($i = 0; $i < $len / 2; $i++) {
      if ($arr[$i] != $arr[$len - $i - 1]) {
        return false;
      }
    }
    return true;
  }
  
// Sử dụng hàm isPalindrome để kiểm tra chuỗi
  $str = "manam";
  if (isPalindrome($str)) {
    echo "$str là chuỗi Palindrome";
  } else {
    echo "$str không phải là chuỗi Palindrome";
  }
//18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function countElement($arr, $element) {
    $count = 0;
    foreach ($arr as $value) {
        if ($value == $element) {
            $count++;
        }
    }
    return $count;
}

// Sử dụng hàm để đếm số lần xuất hiện của phần tử 10 trong mảng
$array = array(10, 20, -5, 10, 9, 0);
$element = 1;
echo "Số lần xuất hiện của phần tử '$element' trong mảng là: " . countElement($array, $element);

//19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần. 
function sortDescArray($arrs){
    $count = count($arrs);
    for($i=0; $i<$count; $i++)
        for($j=$i+1; $j<$count; $j++)
            if($arrs[$i]<$arrs[$j]){
                $temp = $arrs[$i];
                $arrs[$i] = $arrs[$j];
                $arrs[$j] = $temp;
            }
    return $arrs;
}
echo "Mảng nhập vào: ";
foreach($array as $value)
    echo $value . " ";
echo "<br>";
$array = sortDescArray($array);
echo "Mảng giảm dần: ";
foreach($array as $value)
    echo $value . " ";
    
//20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function insertFirstOrEndArray($arrs, $value, $index){
    $count = count($arrs);
    $newArrs = [];
    for($i = $index; $i <= $count; $i++)
        $newArrs[$i - $index] = $arrs[$i - 1];
    $arrs[$index-1] = $value;
    for($i = $index; $i <= $count; $i++)
        $arrs[$i] = $newArrs[$i-$index];
    return $arrs;
}
$colors = array("blue", "black", "white");
echo "Mảng nhập vào: ";
foreach($colors as $value)
    echo $colors . " ";
echo "<br>";
$insertColors = "yellow";
$pos = 1;
echo "Phần tử muốn thêm: " . $insertColors . "<br> Vị trí muốn thêm: " . $pos . "<br>";
$insertFirstOrEndColors = insertFirstOrEndArray($cars, $insertCar, $pos);
echo "Kết quả: ";
foreach($insertFistOrEndColors as $value)
    echo $value . " ";

//21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng. 
function findSecondNumber($array){
    $max = $array[0];
    $secondMax = $array[0];
    foreach($array AS $value){
        if($max <= $value){
            $secondMax = $max;
            $max = $value;
        }
    elseif ($secondMax <= $value){
        $secondMax = $value;
    }
    }
    return $secondMax;
}
$numberArrays = [-1, -4, 5, 9];
echo "Mang ban dau: ";
foreach($numberArrays AS $value){
    echo $value . " ";
}
echo "<br>";
echo "So lon thu hai la: " .findSecondNumber($numberArrays);
//22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function findGCDAndLCM($num1, $num2){
    // GCD = Greatest Common Diviser UCLN
    // LCM = Least Common Multiple BCNN
    $GCD = $LCM = 1;
    if($num1>=$num2) $max = $num1;
    else $max = $num2;
    for($i=1; $i<=$max; $i++){
        if($num1%$i==0 && $num2%$i==0){
            $GCD = $i;
        }
    }
    $LCM = $num1*$num2/$GCD;
    return [$GCD, $LCM];
}
$num1 = 9;
$num2 = 24;
echo "Hai số nguyên là: $num1 và $num2 <br>";
echo "UCLN là: " . findGCDAndLCM($num1,$num2)[0] . "<br>BCNN là: " . findGCDAndLCM($num1,$num2)[1];
//23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không. -->
function perfectNumber($number)
{
    if ($number <= 0) {    // Kiểm tra số nguyên dương
        return false;
    }
    // Tính tổng các ước số dương của số
    $sum = 0;
    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    // Kiểm tra xem tổng ước số có bằng số ban đầu hay không
    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}
$number = 36;
if (perfectNumber($number)) {
    echo "$number là số hoàn hảo.";
} else {
    echo "$number không phải là số hoàn hảo.";
}

//24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng. -->
function findOddNumber($arrays){
    $max = $arrays[0];
    foreach($arrays as $array){
        if($array % 2 != 0){
            if($max < $array)
                $max = $array;
        }
    }
    return $max;
}
$numberArrays=[2, 99];
foreach($numberArrays as $value)
    echo $value . " ";
echo "<br>Số lẻ lớn nhất trong mảng là: " . findOddNumber($numberArrays);

//25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không. 
function findPrimeNumber($number){
    if($number <= 1)
        return false;
    $count = 0;
    for($i=1; $i<=$number; $i++)
        if($number % $i == 0)
            $count++;
    if($count == 2) 
        return true;
}
$number = 9;
if(findPrimeNumber($number))
    echo "Số $number là số nguyên tố";
else 
echo "Số $number không phải là số nguyên tố";
//26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng. 
function findMaxPositiveNumber($array){
    $max = $array[0];
    foreach($array as $value){
        if($value<0)
            continue;
        else if ($max < $value) $max = $value;
    }
    return $max;
}
$numberArrays=[22, 99, -56, 0];
foreach($numberArrays as $value)
    echo $value . " ";
echo "<br>Số dương lớn nhất trong mảng là: " . findMaxPositiveNumber($numberArrays);
//27.Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findMaxNegativeNumber($array){
    $max = $array[0];
    foreach($array as $value){
        if($value>0)
            continue;
        else if ($max < $value) $max = $value;
    }
    return $max;
}
$numberArrays=[2, -6, -99, 100];
foreach($numberArrays as $value)
    echo $value . " ";

echo "<br>Số âm lớn nhất trong mảng là: " . findMaxNegativeNumber($numberArrays);

//28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n. 
function calcSumOddNumbers($n){
    $sum = 0;
    $n = intval($n);
    if($n<0)    
        echo "Số nhập vào phải là số dương";
    else{
        for($i=1; $i<=$n; $i++)
        if($i%2!=0)
            $sum += $i;
        return $sum;
    }
}
$n = 5;
echo "Tính tổng các số lẻ từ 1 đến $n <br>";
echo "Kết quả: " . calcSumOddNumbers($n);
/* IDEA: Lặp lại ----Dùng for
chạy từ 1 đến n
in ra tổng, gán biến tổng ban đầu là 0
Chia cho 2 mà số dư khác 0 là số lẻ. Mục đích Ktra số lẻ, nếu là số lẻ tiếp tục
*/
// 29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function findPerfectSquares($start, $end)
{
    $perfectSquares = [];
    for ($i = $start; $i <= $end; $i++) {
        // Kiểm tra nếu số là số chính phương
        if (sqrt($i) == (int)sqrt($i)) {
            $perfectSquares[] = $i;
        }
    }
    return $perfectSquares;
}
$start = 1;
$end = 100;
$perfectSquares = findPerfectSquares($start, $end);
echo "Các số chính phương trong khoảng $start đến $end là: " . implode(', ', $perfectSquares);

//30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không. 
function isSubString($string1, $string2) {
    $check = strpos($string1, $string2);
if ($check !== false) {
        echo "Chuỗi '$string2' là chuỗi con của'$string1'.";
} else {
        echo "Chuỗi '$string2' không là chuỗi con của '$string1'.";
}
}
$string1 = "Thuong Mai University"; 
$string2= "Mai"; 
echo isSubString($string1, $string2);

/*IDEA
Dùng
 - Hàm strpos dùng để tìm vị trí xuất hiện đầu tiên của một chuỗi con trong chuỗi cho trước 
 - if - else
 - TH: NẾU 2 chuỗi trên chứa nhau về cả giá trị và kiểu: thì trả về false
 !==  : kHÔNG BẰNG ---Nếu không bằng nhau trả về TRUE - CÒN NẾU chứa nhau TRẢ VỀ FALSE -
 - strpos PHÂN BIỆT CHỮ HOA+ CHỮ THƯỜNG
 Để tìm số lớn nhất thì bước đầu tiên ta sẽ tạo một biến $max lưu phần tử đầu tiên $array[0] lại 
 và xem như nó là phần tử lớn nhất, sau đó duyệt qua từng phần tử tiếp theo rồi so sánh, 
 nếu phần tử nào lớn hơn $max thì lập tức gán giá trị của phần tử đó cho $max.*/
 ?>