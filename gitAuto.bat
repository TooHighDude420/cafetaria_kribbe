@echo off
:menu
echo 1. set branch
echo 2. commit and push
echo 3. set main
echo 4. exit
set /P choise="enter choise"

if /i "%choise%" == 1 goto branch
if /i "%choise%" == 2 goto commit
if /i "%choise%" == 3 goto setmain
if /i "%choise%" == 4 goto exit

:commit
git add .
set /P var123="Enter commit message: "
git commit -m "%var123%"
git push
pause
goto @menu

:branch
set /P branchname="branch name"
git branch -M %branchname%
pause
goto @menu

:setmain
set /P link="enter repo link"
git remote add origin %link%
git add .
set /P commitMes="enter commit message"
git commit -m "%committMes%"
git push -u origin main
pause
goto @menu

:exit
exit