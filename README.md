# Hamnosys Project

### Requirements
To run this project, you need Docker installed on your system

#### Docker Installation
Follow these steps
 - Visit https://www.docker.com website, and download for your operating system (e.g. x64 windows uses Windows-AMD64)
 - Once the setup is downloaded, install and after it finishes, restart your computer.
 - On restart, make sure you start Docker engine by opening docker desktop app then on bottom left corner, **Run engine**. It should be running. Now minimize this docker desktop app.
 - Open the terminal inside your **hamnosys** folder and run the following command
```powershell
docker compose up -d --wait
```
 - Wait, an output similar to shown below should come up, stating `Healthy`
```powershell
[+] Running 2/2
 ✔ Network hamnosys_default         Created                                                           0.0s
 ✔ Container hamnosys-frankenphp-1  Healthy     <- once this is healthy, we are good                 30.9s
```
 - Finally, open your browser to https://localhost:4000 and click `Advanced` and click on `Proceed to localhost (unsafe)`. 

Congratulations, you should see your website working.