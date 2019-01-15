<?php

//传入一段字符串，大于5个反转
$str = "This is a typical sentence.";
function reverse($str){
    $arr = explode(' ',$str);
    foreach ($arr as $key => $value){
        if(strlen($value) >=5 ){
            $item = strrev($value);
            $arr[$key] = $item;
        }
    }
    $str =  implode(' ',$arr);
    print_r($str);
}
reverse($str);

//去掉重复，排序
$arr = [1, 4, 4, 4, 4, 4, 3, 2, 1, 2];
function uniqueSort($arr){
    $new_arr = array_unique($arr);
    sort($new_arr);
    var_dump($new_arr);

}
uniqueSort($arr);

//首字母和最后一个互换位置，如果长度小于2 显示Incompatible ，如果传入的[1,2,3,4]，显示Incompatible，如果首字母和尾字母相同，显示Two's a pair.

$str = "Cat, dog, and mouse.";
function flipEndChars($str) {
    if(gettype($str) !== "string"){
        return  "Incompatible";
    }elseif (strlen($str) < 2 ){
        return "Incompatible";
    }elseif ((substr($str,0,1)) == (substr($str,-1)) ){
        return "Two's a pair.";
    }else{
        return substr($str,-1).substr($str,1,strlen($str)-2).substr($str,0,1);
    }
}
print_r(flipEndChars($str));
function flipEndChars1($str){
    if(gettype($str) == "string"){
        $arr =  str_split($str);
        $count = count($arr);
    }else{
        echo "Incompatible";
        return false;
    }
    if($count < 2){
        echo "Incompatible.";
    }elseif ($arr[0] === $arr[$count-1]){
        echo  "Two's a pair.";
    }elseif (gettype($str) == "array"){
        echo "Incompatible";
    }else{
        $replace = "";
        $replace = $arr[0];
        $arr[0] = $arr[$count-1];
        $arr[$count-1] = $replace;
        $new = implode($arr);
        echo "<pre>";
        var_dump($new);
        echo "</pre>";
    }
}
/*
 *只有12.24 可以
 * */
function timeForMilkAndCookies( $date){
    if( $date->format("md") === "1224" )
    {
        return true;
    }else{
        return false;
    }


}
/*$a = timeForMilkAndCookies(new DateTime("2013-12-24"));
var_dump($a);*/
/*
 * 字符串翻转
 * */
function reverse($string){
    preg_match_all('/./us', $string, $ar);
    echo '<pre>';
    var_dump($ar);
    echo '</pre>';
    print_r(strrev($string));
}
/*$str = "Edabit is really helpful!";
reverse($str);*/
/*
 * 求圆的周长和半径
 * */
class Circle{
    public $range;
    public $aa;
    public  $bb;
    public function __construct($range){
                $this->range = $range;

    }
    public function getPerimeter(){
        echo $this->aa = 2*pi()*$this->range;
    }
    public function getArea(){
        echo $this->bb = pi() * ($this->range * $this->range);
    }
}
/*$a = new Circle(11);
$a->getPerimeter();
echo "\n";
$a->getArea();*/

/*
 * "Hello" ➞ "HeLlO"
 * */
function alternatingCaps ($str) {
    $arr =  str_split($str);

    foreach ($arr as $key=>$value){
        if($key % 2 == 0){
            $arr[$key] = strtoupper($value);
        }else{
            $arr[$key] = strtolower($value);
        }
        $a =  implode($arr);

    }
    var_dump($a);
}
$string = "OMG!!! This website is awesome!!!";
/*alternatingCaps($string);*/
/*
 * aka 演示输出
 * eg： 5321 =》 5000+300+20+1
 * */
$num = 17890000000;
function text14($num){
    $arr = str_split($num);
    $count = count($arr);
    foreach ($arr as $key =>$value){
        $new[] = (int)$value * pow(10,$count-$key-1);
    }
    $new_array = array_filter($new ,function($key){
        return $key > 0;
    });
    foreach ($new_array as $value){
        if($sum == 0){
            $sum = $value ;
        }else{
            $sum = $sum ."+".$value ;
        }
    }
    var_dump($sum);
}
text14($num);
//判断第二个字符串是否是第一个字符串的结尾，是返回true，不是返回false；
//
$a = "abc";
$b = "bc";
$c = "d";
function text13($string1,$string2){
    $cout_a = strlen($string2);
    $new = stristr($string1,$string2);
    $cout_new  = strlen($new);
    if($cout_a == $cout_new){
        echo "true";
    }else{
        echo "false";
    }

}
text13($a,$c);
/*countWords("Just an example here move along") ➞ 6

countWords("This is a test") ➞ 4

countWords("What an easy task, right") ➞ 5*/
$str = "This is a test";
function text12($string){
    $arr = str_split($string);
    $count = 0;
    foreach ($arr as $value){
        if($value == " "){
            $count++;
        }
    }
    echo $count+1;
    /*echo "<pre>";
    var_dump($arr);
    echo "</pre>";*/
}
/*text12($str);*/

/*创建一个带有正数和负数数组的函数。返回一个数组，其中第一个元素是正数的计数，第二个元素是负数的总和。
[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15] ➞ [10, -65]

[92, 6, 73, -77, 81, -90, 99, 8, -85, 34] ➞ [7, -252]

[91, -4, 80, -73, -28] ➞ [2, -105]

null ➞ []

[] ➞ []*/
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15];
function text9($arr){
    if($arr == null || $arr == [] ){
        $new_arr = [];
    }else{
        $arr_z = array_filter($arr,function($key){
            return $key >=0;
        });
        $count = count($arr_z);
        $sum_f ="";
        foreach ($arr as $value){
            if($value <0 ){
                $sum_f +=$value;
            }
        }
        $new_arr = [];
        array_push($new_arr,$count,$sum_f);
    }

    var_dump($new_arr);
}
$arr1 = [] ;
text9($arr);


/*创建一个接受数组的函数，并返回数组中的最后一项。
例子
getLastItem([1, 2, 3]) ➞ 3

getLastItem(['cat', 'dog', 'duck']) ➞ 'duck'

getLastItem([true, false, true]) ➞ true笔记*/
$arr = ['cat', 'dog', 'duck'];
function text10($arr){
    $count = count($arr);
    print_r($arr[$count-1]);
}
function text8($arr){
    $b = end($arr);
    var_dump($b);
}
/*text8($arr);*/


// 创建一个接受字符串并返回其中包含的元音数量（计数）的函数。
// "Celebration" ➞ 5
$abc = "aeiouthgnbaeiou";
function text6($abc){
    $abc = str_split($abc);
    $a =  array_filter($abc,function ($key){
        return $key === "a"||$key === "e"||$key === "i"||$key === "o"||$key === "u";
    });
    $sum = count($a);
    print_r($sum);
}
text6($abc);


// 隐藏指定的字符串
// "4556364607935616" ➞ "############5616"
$str = "4556364607935616";
function text5($str){
    $len = strlen($str);
    if($len < 4){
        return $str;
    }
    $str1 = substr($str,-4);
    $new_str =  str_pad($str1, $len, '#', STR_PAD_LEFT);
    print_r($new_str);
}
/*text5($str);*/

/*取一个整数数组（正数或负数或两者）并返回每个元素的绝对值之和*/
$arr = [2, -1, 4, 8, 10];
function abssume($arr){
    $a = array_sum(array_map('abs',$arr)) ;
    var_dump($a);
}
/*abssume($arr);*/
// 创建一个带有数字数组的函数，并将平均值作为字符串返回。
$arr = [1, 0, 4, 5, 2, 4, 1, 2, 3, 3, 3];
function text4($arr){
    foreach ($arr as $value){
        $num += $value;
    }
//    array_sum($arr);
    $value = $num / count($arr);
    echo $value;

}
text4($arr);
//   创建一个函数，该函数接受一个数字数组并返回一个数组，其中每个数字是其自身的总和+数组中的所有先前数字。
// [3, 3, -2, 408, 3, 3] ➞ [3, 6, 4, 412, 415, 418]
$arr = [3, 3, -2, 408, 3, 3];
function text_3($arr){
    foreach ($arr as $value){
        $sum += $value;
        $new[] = $sum;
    }
    var_dump($new);
}
/*text_3($arr);*/
// 创建一个采用字符串数组的函数。返回数组中恰好是四个字母的所有单词。
// ["Ryan", "Kieran", "Jason", "Matt"] ➞ ["Ryan", "Matt"]
function appe ($arr){
    foreach ($arr as $value){
        if(strlen($value) == 4){
            $new[] = $value;
        }
    }
    var_dump($new);
}
/*$app = ["Ryan", "Kieran", "Jason", "Matt"];
appe($app);*/

//创建一个获取数字数组并仅返回偶数值的函数。

function text($arr){
    $a = array_filter($arr,function($key){

        return $key % 2 === 0;
    });
    var_dump($a);
}
/*$arr = [1,2,3,4,5,6,7,8];
 text($arr);*/

// 创建一个函数，该函数将任何非负数作为参数，并以降序返回数字。降序是指从最高到最低排序。
// $this->assertEquals(977766200, sortDecending(670276097));
// 1254859723 ➞ 9875543221
function text1($string){
    $str = str_split($string);
    rsort($str);
    $str_1 = implode($str);
    var_dump($str_1);
}
/*$str = 13324142;
text1($str);*/

/*创建一个函数，该函数采用1-10之间的数字数组，并返回缺少的数字
[1,2,3,4,6,7,8,9,10] => 5*/
function text($arring){
    $arr = [1,2,3,4,5,6,7,8,9,10];
    $arr_a = array_diff($arr,$arring);
    echo "<pre>";
    print_r($arr_a);
    echo "<pre>";
}
$a = [1,3,5,6,7,8,9,10];
text($a);

function text1($arring){
    $arr = [1,2,3,4,5,6,7,8,9,10];

    foreach ( $arr as $item){
        if(!in_array($item,$arring)){
            print_r($item);
        }
    }
}
$a = [1,3,5,6,7,8,9,10];
text1($a);

/*创建一个接受字符串并返回一个字符串的函数，其中每个字符重复一次。
"String" ➞ "SSttrriinngg"

"Hello World!" ➞ "HHeelllloo  WWoorrlldd!!"

"1234!_ " ➞ "11223344!!__  "*/

function echoit($string)
{
    $aa = str_split($string);
    $count = count($aa);
    for ($i = 0; $i < $count; $i++){
        for($j = 0; $j <= 1; $j++){
            print_r($aa[$i]);
        }

    }
}
echoit("dsfdsf");

/*创建一个接受字符串并返回中间字符的函数。如果单词的长度为奇数，则返回中间字符。如果单词的长度是偶数，则返回中间的两个字符。
        test" ➞ "es"
       "testing" ➞ "t"
       "middle" ➞ "dd"
       "A" ➞ "A" */
function aqiu($string){
    $str = str_split($string);
    $count = count($str);
    if($count % 2 ){
        $a = $count / 2;
        $b =  round($a);
        print_r($str[$b-1]);
    }else{
        $a = $count / 2;
        print_r($str[$a-1]);
        print_r($str[$a]);
    }

}
aqiu(qwerer);
