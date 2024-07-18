# Dockerfile
FROM ubuntu:latest

RUN apt-get update && apt-get install -y transmission-cli transmission-common transmission-daemon

CMD ["transmission-daemon", "--foreground"]
