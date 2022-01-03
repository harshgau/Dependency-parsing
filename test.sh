# pid=`ps -ef | awk '/netstat -aon ^| findstr 8080/{ print $2 }'`
# $var1='for /f "tokens=5" %a in ("netstat -aon ^| findstr 8080") do @echo %~nxa'
# 'taskkill /F /PID pid'.
# 'sudo kill -9 `sudo lsof -t -i:8080`'
# alias kill8080="fuser -k -n tcp 8080"
npx kill-port 8080
# kill $(lsof -t -i:8080)
# kill -9 $(lsof -t -i tcp:8080)
# kill -9 $(lsof -i:8080 -t)
# kill -9 $(lsof -i:8080 -t) 2> /dev/null
"env\Scripts\activate.bat"
cd "env\Dependency parser\templates\prodigy-custom-model"
python -m prodigy custom-dep data relations -F dependency.py
start http://localhost:8080