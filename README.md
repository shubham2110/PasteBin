# PasteBin in command line

#### Get start
```
echo 'Follow me: https://github.com/WangYihang' | curl -F 'f=@-' https://paste.sniperoj.com
```

#### Install
```
git clone https://github.com/WangYihang/PasteBin
cd PasteBin
mkdir data
chmod o+w ./data
sudo docker-compose up -d
```

#### Usage
```
[COMMAND] | curl 'f=@-' http://127.0.0.1:8080
```
