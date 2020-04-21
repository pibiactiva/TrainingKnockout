Get-ChildItem -Path $PSScriptRoot -Recurse -Filter *.js | Rename-Item -NewName {[System.IO.Path]::ChangeExtension($_.Name, ".txt")}
