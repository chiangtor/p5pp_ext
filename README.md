p5pp_ext
========

A demo from php5 power programming chapter 15

./ext_skel --extname=myfile --proto=myfile.def
1.  $ cd ..
2.  $ vi ext/myfile/config.m4
uncomment: 
PHP_ARG_ENABLE(myfile, whether to enable myfile support,
        [  --enable-myfile                 Include myfile support])

    3.  $ ./buildconf
    4.  $ ./configure --[with|enable]-myfile
    5.  $ make
    6.  $ ./php -f ext/myfile/myfile.php

    7.  $ vi ext/myfile/myfile.c
    8.  $ make

    Repeat steps 3-6 until you are satisfied with ext/myfile/config.m4 and
    step 6 confirms that your module is compiled into PHP. Then, start writing
    code and repeat the last two steps as often as necessary.

    NOTE! Because some arguments to functions were resources, the code generated
    cannot yet be compiled without editing. Please consider this to be step 4.5
    in the instructions above. 

