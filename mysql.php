<?php
$host = "localhost:3307";
$username = "root";
$password = "";
$databaseName = "students";
$connection = new mysqli($host,$username,$password);

if($connection -> connect_errno!=0){
    die ("connection failed");
}
$connection ->select_db($databaseName);

/*
mysql datatype:three essientail types to store

1.text
2.number
3.date and times

* actual datatype
1.int = integer, sixe 4 byte
2. bigint = integer , size 8 byte
3. float = decimal number , size 4 bytes
4. double = decimal number , size 8 bytes
5. tinyint = integer , size 1 byte
6. smallint = integer , size 2 bytes
7. mediumint = integer , size 3 bytes
8.VARCHAR[255] = 255 length + 1bytes size
9. tinyText =  max length 255
10.text = max length 65,535 charcter
11.mediumText = max length 16,777,215 charcter (string length + 3 bytes)
12.longText = max length 4,294,967,295 charcter (string length + 4 bytes)
13. date =YYYY-MM-DD
14.datetime = YYYY-MM-DD HH:MM:SS
15. ENUM = each column can have one possible value


** spatial data type
1. POINT
2.POLYDON
3.GEOMETRY
4.GEOMETRYCOLLECTION




*/

?>