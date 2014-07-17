 param(
[string]$name 
)
 

import-module activedirectory   
$processes = Disable-AdAccount -Identity $name; 

$user = Get-AdUser -Identity $name;

$process = Move-AdObject -Identity $user.DistinguishedName -TargetPath "OU=Disabled, OU=Users, OU=Romania, DC=licenta, DC=com"