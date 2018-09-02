# Origin image
FROM ubuntu:latest

# Meta Information
MAINTAINER Wang Yihang "wangyihanger@gmail.com"

# update
RUN apt update

ENV DEBIAN_FRONTEND noninteractive

# Setup Server Environment
RUN apt install -y \
    tzdata \
    apache2 \
    php \
    libapache2-mod-php

# Timezone
RUN ln -fs /usr/share/zoneinfo/Asia/Shanghai /etc/localtime && dpkg-reconfigure -f noninteractive tzdata


# Entry point
ENTRYPOINT service apache2 start && /bin/bash
