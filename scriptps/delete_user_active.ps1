param(
[string]$name 
)
 
import-module activedirectory    

$user = Get-AdUser -Identity $name;
$process = Move-AdObject -Identity $user.DistinguishedName -TargetPath "OU=Pending, OU=Users, OU=Romania, DC=licenta, DC=com" 
 