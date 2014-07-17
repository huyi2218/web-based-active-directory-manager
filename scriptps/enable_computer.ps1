param(
[string]$name 
)
 

import-module activedirectory    


$process1 = Move-AdObject -Identity "CN=$($name), OU=Disabled, OU=Computers, OU=Romania, DC=licenta, DC=com" -TargetPath "OU=Active, OU=Computers, OU=Romania, DC=licenta, DC=com" ;
$process2 = Enable-AdAccount -Identity "CN=$($name), OU=Disabled, OU=Computers, OU=Romania, DC=licenta, DC=com" ;

 