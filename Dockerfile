# Dockerfile
FROM ubuntu:latest

RUN apt-get update && apt-get install -y transmission-cli

CMD ["transmission-daemon", "--foreground"]
