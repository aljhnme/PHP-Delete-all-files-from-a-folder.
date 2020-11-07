<?php

//###But what if we want to delete all of the files in the sub-folders as well?


//To delete all files and directories in all sub-directories, we can make use of recursion. Here is an example of a recursive PHP function that deletes every file and folder in a specified directory:


function deleteAll($str){
    //It it's a file.
    if (is_file($str)) {
        //Attempt to delete it.
        return unlink($str);
    }
    //If it's a directory.
    elseif (is_dir($str)) {
        //Get a list of the files in this directory.
        $scan = glob(rtrim($str,'/').'/*');
        //Loop through the list of files.
        foreach($scan as $index=>$path) {
            //Call our recursive function.
            deleteAll($path);
        }
        //Remove the directory itself.
        return @rmdir($str);
    }
}

//call our function
deleteAll('temporary_files');

//The function above basically checks to see if the $str variable represents a path to a file. If it does represent a path to a file, it deletes the file using the function unlink. However, if $str represents a directory, then it gets a list of all files in said directory before deleting each one. Finally, it removes the sub-directory itself by using PHP’s rmdir function.


?>