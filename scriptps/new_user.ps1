param(
[string]$fname,
[string]$lname,
[string]$description 
)
 

import-module activedirectory 
$name =  (Get-Culture).textinfo.totitlecase($fname.tolower()) + " "  + (Get-Culture).textinfo.totitlecase($lname.tolower())
 
$processes = New-ADuser -SamAccountName "$($fname).$($lname)" -Name "$($name)"  -givenname "$($fname)" -Surname "$($lname)" -Path "OU=Active,OU=Users,OU=Romania,DC=licenta,DC=com"  -AccountPassword (ConvertTo-SecureString -AsPlainText "asdQWE123" -Force) -City "Bucuresti" -Company "Licenta" -DisplayName "$($name)"  -Country "RO" -Department "IT" -Description "$($description)"  -EmailAddress "$($fname).$($lname)@ipsos.com"  -Enabled $true -Office "IIS" -StreetAddress "Splaiul Independentei 319" -Title "$($description)" ;

$processes = Set-ADuser -UserPrincipalName "$($fname).$($lname)@licenta.com" -Identity "$($fname).$($lname)" ;
 

 