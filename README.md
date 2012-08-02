PHP Function: delete a specific line in a file
===

How to use it
-------------
Just put the function's code from the "php-delete-line-in-file.php" file in yours and call the function like this:
> deleteLineInFile("myFile.csv","myString");

How it works
------------
1. The function read the file line per line
2. it explodes the line on the ";" character (useful for CSV file)
3. it reconstructs the line and put it in a array

This way the file's kinda backed up so it can be erased to write all but the line we want in

4. so for each reconstructed line in the array it checks if the string we're looking for exists
5. if the string doesn't exist in the line then we put the line back in the file


Why I did it
------------

I add a CSV file who looked like this:
> text1;text2
>
> text3;text4
>
> text5;text6
>

And I needed to remove the line containing the "text3" string. I did my function so it can work with my specific file, and then I changed it to work with any "generic" CSV or TXT file.

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