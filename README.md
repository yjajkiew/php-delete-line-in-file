PHP Function: delete a specific line in a file
===

How to use it
-------------
Just put the function's code from the "php-delete-line-in-file.php" file in yours and call the function like this:
> deleteLineInFile("myFile.ext","myString");

How it works
------------
1. read the file line per line
2. store each line in an array

This way the file is backed up so it can be opened for writing, erasing all the data

4. for each line stored in the array, if it doesn't contain the string we write it back in the file
5. else we do nothing so only the lines not containing the string are written back


Why I did it
------------

I had a CSV file who looked like this:
> text1;text2
>
> text3;text4
>
> text5;text6
>

And I needed to remove the line containing the "text3" string. 
I did my function so it can work with my specific file, and then I changed it to work with any kind of file (tested with CSV, TXT and HTML files).

License
-------
           DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
                   Version 2, December 2004

      Copyright (C) 2004 Sam Hocevar <sam@hocevar.net>

    Everyone is permitted to copy and distribute verbatim or modified
    copies of this license document, and changing it is allowed as long
    as the name is changed.

            DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
     TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION

    0. You just DO WHAT THE FUCK YOU WANT TO.