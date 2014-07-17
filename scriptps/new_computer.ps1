 param(
[string]$name, 
[string]$description 
)
 

import-module activedirectory   
 
 $processes = New-ADcomputer -name $name -SamAccountName $name -Enabled $true -path "OU=Active, OU=Computers,OU=Romania,DC=licenta,DC=com" -Description "$($description)" -Managedby "Romania Full Admins" 