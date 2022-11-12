sudo docker build -t laborative-app:latest .
sudo docker run -d -p 8000:2000 --name laborative laborative-app:latest
