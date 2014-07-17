param(
[string]$name 
)
 

import-module activedirectory    
$user = Get-ADComputer -Identity $name
$process2 = Remove-ADComputer -Identity $user  -Confirm:$false

 