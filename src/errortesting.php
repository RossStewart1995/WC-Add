<?php

//////////////////////////1

echo "Simple Error Test Script Starting\n";
require('functions.inc.php');

$x=null;
$y=5;
$expect="x is null";

$answer=add($x,$y);

echo "Test1 Result: ".$x."+".$y."=".$answer." (expected: ".$expect.")\n";

if ($answer==$expect)
{
    echo "Test Passed\n";
    
}
else
{
    echo "Test Failed\n";
    exit(1); // exit code not zero - error
}

//////////////////////////2


$x=5;
$y=null;
$expect="y is null";

$answer=add($x,$y);

echo "Test2 Result: ".$x."+".$y."=".$answer." (expected: ".$expect.")\n";

if ($answer==$expect)
{
    echo "Test Passed\n";
}
else
{
    echo "Test Failed\n";
    exit(1); // exit code not zero - error
}


//////////////////////////3

$x=null;
$y=null;
$expect="both x and y are null";

$answer=add($x,$y);

echo "Test3 Result: ".$x."+".$y."=".$answer." (expected: ".$expect.")\n";

if ($answer==$expect)
{
    echo "Test Passed\n";
}
else
{
    echo "Test Failed\n";
    exit(1); // exit code not zero - error
}


//////////////////////////4

$x="string";
$y=6;
$expect="x is not of data type: int";

$answer=add($x,$y);

echo "Test4 Result: ".$x."+".$y."=".$answer." (expected: ".$expect.")\n";

if ($answer==$expect)
{
    echo "Test Passed\n";
}
else
{
    echo "Test Failed\n";
    exit(1); // exit code not zero - error
}

//////////////////////////5

$x="string";
$y="string";
$expect="both x and y are not of data type: int";

$answer=add($x,$y);

echo "Test5 Result: ".$x."+".$y."=".$answer." (expected: ".$expect.")\n";

if ($answer==$expect)
{
    echo "Test Passed\n";
}
else
{
    echo "Test Failed\n";
    exit(1); // exit code not zero - error
}

//////////////////////////6

$x=6;
$y="string";
$expect="y is not of data type: int";

$answer=add($x,$y);

echo "Test6 Result: ".$x."+".$y."=".$answer." (expected: ".$expect.")\n";

if ($answer==$expect)
{
    echo "Test Passed\n";
}
else
{
    echo "Test Failed\n";
    exit(1); // exit code not zero - error
}


exit(0); // exit code 0 - success


