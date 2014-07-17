param(
[string]$name 
)
 

import-module activedirectory    

$user = Get-AdUser -Identity $name;
$process1 = Unlock-ADAccount -Identity $user.DistinguishedName ; 
$process2 = Set-ADAccountPassword $user.DistinguishedName -Reset -NewPassword (ConvertTo-SecureString -AsPlainText "asdQWE123" -Force)