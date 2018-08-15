# DEMO Step :
1. git clone https://github.com/mark19891107/sayit-plugin-octobercms
2. Run with docker
   ```
   docker run -p 80:80 --rm -v $(pwd)/sayit-plugin:/var/www/html/plugins/markdai/sayitplugin -v $(pwd)/sayit-plugin-demo:/var/www/html/themes/sayit-plugin-demo aspendigital/octobercms:latest
   ```
3. Open : [http://localhost/backend](http://localhost/backend) with admin/admin
4. Back to URL : [http://localhost/backend](http://localhost/backend)
5. Install RainLab.Builder plugin
    * [Settings] -> [Updates & Plugins] -> [Install plugins] -> [RainLab.Builder]
6. Activate Sayit Plugin DEMO
    * [Settings] -> [Front-end theme] -> Activate Sayit Plugin DEMO theme
7. Click [逐字稿管理] in nav -> Click Create 
    * 會議名稱：2016-11-23-青年諮詢委員會第1次會議
    * 逐字稿連結：https://sayit.pdis.nat.gov.tw/2016-11-23-青年諮詢委員會第1次會議.an
    * Create & Close
8. Open : [http://localhost](http://localhost)
9. Done！
