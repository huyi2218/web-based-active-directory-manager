param(
[string]$location
)
import-module activedirectory
  
$processes = Get-ADUser  -Properties * -Filter * -SearchBase   "OU=$($location),OU=Users,OU=Romania,DC=licenta,DC=com"

foreach($process in $processes)
{
	Write-Output "$($process.SamAccountName)," 
}
 