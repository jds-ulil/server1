@echo Starting php
@RunHiddenConsole php/php-cgi.exe -b 127.0.0.1:9000
@echo Starting nginx
@cd nginx
@start nginx
@echo Done.
@set /p nothing