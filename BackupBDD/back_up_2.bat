@echo off
:: seteo de la fecha y la hora
set Dia=%Date:~0,2%
set Mes=%Date:~3,2%
set Anio=%Date:~6,4%
::set Hora= %Time:~0,2%
::set Minutos=%Time:~3,2%
::set Segundos=%Time:~6,2%

set FECHA=%Dia%-%Mes%-%Anio%
::_%Hora%-%Minutos%_%Segundos%
mysqldump -h localhost -u root bd_sigupsues> Back_Up_SIGUPSUES_%FECHA%.sql
exit