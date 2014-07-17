param(
[string]$name 
)
  
import-module activedirectory      

$user = Get-AdUser -Identity $name;
$process1 = Add-ADGroupMember "Administrators" -Members (get-aduser $name)     ;  