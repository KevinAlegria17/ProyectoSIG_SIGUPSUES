@echo off

mysqldump -hlocalhost -uroot bd_sigupsues --tables> BK_%date:~-4,4%%date:~-10,2%%date:~-7,2%_%time:~0,2%%time:~3,2%.sql
exit