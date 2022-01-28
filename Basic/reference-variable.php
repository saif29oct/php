<?php  

// Example 1
$x = "abc";  
$$x = 200;  
echo $x."\n";  
echo $$x."\n";  
echo $abc."\n";  
echo $x."\n";  


// Example 2
$area = "Akbarshah";
$$area = "Ferozshah";
$$$area = "Janarkhil road";
$$$$area = "Plot 59";
echo "My Address is {$$$$area}, {$$$area}, {$$area}\n";
echo "In Janarkhil which plot number do you live in? \n";
echo "I live at ${'Janarkhil road'} \n"; # String Interpolation is used to call the spaced variable
echo "I live at {$Janarkhil road} \n"; # will produce an error 


// Example 3
$name="Cat";  
${$name}="Dog";  
${${$name}}="Monkey";  
echo $name. "\n";  
echo ${$name}. "\n";  
echo $Cat. "\n";  
echo ${${$name}}. "\n";  
echo $Dog. "\n";