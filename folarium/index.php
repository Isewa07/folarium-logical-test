<?php

function BilanganPrima($max)
{
	for($i=1;$i<=$max;$i++){ 
		$k=0;
		for($j=1;$j<=$i;$j++){ 
			if($i % $j == 0){ 
				$k++;
			}
		}
			if($k == 2){ 
			echo $i.' ';
		}
	}
}

function Ganjil($min, $max)
{
	for($i = $min; $i < $max; $i++)
	{
		if($i % 2 !=0) echo $i." ";
	}
}

function Genap($min, $max)
{
	for($i = $min; $i < $max; $i++)
	{
		if($i % 2 ==0) echo $i." ";
	}
}
function SegitigaKanan($number)
{
	$star=$number;
	for($a=$star;$a>0;$a--){
	for($b=$star;$b>=$a;$b--){
		echo "*";
	}
	echo "<br>";
	}
}

function SegitigaKiri($number)
{
	$star=$number;
	for($a=$star;$a>0;$a--){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($a1=$star;$a1>=$a;$a1--){
		echo"*";
	}
	echo"<br>";
	}
}

function KelipatanTiga($min, $max)
{
	for($i = $min; $i <=$max; $i++)
	{	
		if($i % 3 == 0)
		{
			echo $i." ";
		}
	}
}

function ArrayKota($input)
{
	$arr = array("Jakarta", "Yogyakarta", "Bandung", "Bogor", "Semarang");
	if(in_array($input, $arr)) echo "True ";
	else echo "False";

}
function RandomNumber()
{
	for($i=1; $i<=5; $i++)
	{
		$rand = rand(1,100);
		if($rand <= 60 ) echo $rand." Kurang. ";
		if($rand > 60 && $rand <=70) echo $rand." Cukup. ";
		if($rand >70 && $rand <=80) echo $rand." Baik. ";
		if($rand > 80) echo $rand." Luar Biasa. ";
	}
}


function FibonancciNumber($max)
{
	$n1 = 0;
	$n2 = 1;
	$result = "$n1 $n2";
	for($i=1; $i<$max - 1; $i++)
	{
		$n3 = $n1 + $n2;
		$result = $result. " $n3";
		$n1 = $n2;
		$n2 = $n3;
	}
	return $result;
}

echo "1. Buat deret bilangan prima (angka 1-100) ! <br>" ;
BilanganPrima(100);
echo"<br> <br>";

echo "2. Buat deret bilangan ganjil (angka 1-100) ! <br>" ;
Ganjil(1, 100);
echo"<br> <br>";

echo "3. Buat deret bilangan genap (angka 1-100) ! <br>" ;
Genap(1, 100);
echo"<br> <br>";

echo "4. Buat deret bilangan fibonacci (angka 1-100) ! <br>" ;
echo FibonancciNumber(100);
echo "<br> <br>";

echo "5. Buat pola segitiga siku-siku, dan pola lainnya <br>" ;
SegitigaKanan(5);
echo"<br>";
SegitigaKiri(5);

echo "6. Tampilkan 5 angka random dari 1-100 : <br>";
RandomNumber();
echo"<br> <br>";

echo "7. Tampilkan deret angka kelipatan 3 (angka 1-100) : <br>";
KelipatanTiga(1,100);
echo"<br> <br>";

echo "8. Buatlah fungsi yang menerima masukan sebuah string nama kota dan mengembalikan boolean jika kota tersebut ada di dalam arr <br>";
ArrayKota("Surabaya");

?>