param(
[string]$name 
)
 

import-module activedirectory    

$user = Get-AdUser -Identity $name;

$process = Unlock-ADAccount -Identity $user.DistinguishedName