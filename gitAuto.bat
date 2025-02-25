@echo off
git add .
set /P var123="Enter commit message: "
git commit -m "%var123%"
git push
pause