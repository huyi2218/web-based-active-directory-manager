param(
[string]$name 
)
 

import-module activedirectory    
 
$process1 = Disable-AdAccount -Identity "CN=$($name), OU=Active, OU=Computers, OU=Romania, DC=licenta, DC=com" 
$process2 = Move-AdObject -Identity "CN=$($name), OU=Active, OU=Computers, OU=Romania, DC=licenta, DC=com" -TargetPath "OU=Disabled, OU=Computers, OU=Romania, DC=licenta, DC=com"

 