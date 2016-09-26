@echo Stopping nginx
@taskkill /IM nginx.exe /F
@echo Stopping php
@taskkill /IM php-cgi.exe /F
@echo Done.
@set /p nothing