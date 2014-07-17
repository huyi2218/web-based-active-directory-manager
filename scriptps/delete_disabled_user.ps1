param(
[string]$name 
)
  
import-module activedirectory     
$user = Get-AdUser -Identity $name;
$process1 = Remove-AdUser -Identity   $user.DistinguishedName -Confirm:$false ;  