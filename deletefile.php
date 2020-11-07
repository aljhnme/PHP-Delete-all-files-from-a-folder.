<!--PHP: Delete all files from a folder.
In this guide, I will show you how to delete all files in a folder using PHP. The first example is pretty straight-forward, as we simply loop through the files and delete them.-->

<!-- Code sample: -->
<?php

//The name of the folder.
$folder = 'temporary_files';

//Get a list of all of the file names in the folder.
$files = glob($folder . '/*');

//Loop through the file list.
foreach($files as $file){
    //Make sure that this is a file and not a directory.
    if(is_file($file)){
        //Use the unlink function to delete the file.
        unlink($file);
    }
}

//1:In this example, we will be deleting all files from a folder called “temporary_files”.

//2:We list the files in this directory by using PHP’s glob function. The glob function basically “finds pathnames that match a certain pattern.” In this case, we use a wildcard (asterix) to specify that we want to select everything that is in the “temporary_files” folder.

//3:The glob function returns an array of file names that are in the specified folder.

//4:We loop through this array.

//5:Using the is_file function, we check to see if it is a file and not a parent directory or a sub-directory.

//6:Finally, we use the unlink function, which deletes the file (if PHP has valid permissions – if not, an E_WARNING error will be thrown and the function will return a boolean FALSE value).

