param(
[string]$name 
)
 

import-module activedirectory     
$user = Get-AdUser -Identity $name;
$process1 = Enable-AdAccount -Identity   $user.DistinguishedName ; 
$process2 = Move-AdObject -Identity $user.DistinguishedName -TargetPath "OU=Active, OU=Users, OU=Romania, DC=licenta, DC=com"