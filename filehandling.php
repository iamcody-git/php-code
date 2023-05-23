<?php
/* file handling in php

fopen(filename, mode)

modes
1. r= open for reading only
2. r+ = open for reading and writing
3. w = open for writing only . clears the content. if dont exist attempts to create it.
4. w+ = open for reading and writing . clears the content.
5. a = (appens) open forwriting only but appends the content . if dont attempt to create it.
6. a+ = apen for reading and writing but appends.
7. x = open for writing only. if files already exists , throws errors 
8. x+ = same  behaviour as x. open for both reading and writing

*/


/*
$file = fopen("1.txt", "r")
close a file 
fclose($filehandell)

*/

/*
reading from files 
fread($filehandel, lengthInBytes)
*/

/*
check file existence
file_exists($filename) = true or false
*/

$fileName = "data.txt";
if(file_exists($fileName)){
  $fh = fopen($fileName, "r"); // open the files
 $content = fread($fh,filesize($fileName)); // reads the file and determines the size byte value
 echo $content;
 fclose($fh); // close the file
}else{
    die("file doesnot exists");
}

/*
another way of reading all content
readfile($fileName);
*/
if(file_exists($fileName)){
    readfile($fileName) or die("cannot read file");
}else{
    die ("file doesnot exits");
}

/*
another way of reading all files 
file_get_contents(fileName);

*/
if(file_exists($fileName)){
   $contents = file_get_contents($fileName) or die("cannot read file");
   echo $contents;
}else{
    die ("file doesnot exits");
}

/*
writing the files
fwrite($fileName, "content");
*/

$data = " this is written from php program";
$fh = fopen($fileName, "w");
fwrite($fh, $data);
fclose($fh);

/*
another way to write files 
file_put_contents($fileName, data);


*/
file_put_contents("data2.txt", "written from file put");

/*
file renaming
rename($oldName, $newName); 
*/
 $oldName = "data.txt";
 $newName = "data.new.txt";

 if(file_exists($oldName)){
    rename($oldName,$newName);
 }

 /*
 removing or deleting files
 unlink($fileName);
 */
if(file_exists($newName)){
 unlink($newName);
}

?>