param(
[string]$location
)
import-module activedirectory
  
$processes = Get-ADComputer  -Properties * -Filter * -SearchBase   "OU=$($location),OU=Computers,OU=Romania,DC=licenta,DC=com"

foreach($process in $processes)
{
	Write-Output "$($process.Name)," 
}
 