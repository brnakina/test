FROM centos:7

MAINTAINER iKato <brnakina@gmail.com>

RUN yum update -y
RUN yum upgrade -y
RUN yum install -y epel-release
RUN yum install -y http://rpms.remirepo.net/enterprise/remi-release-7.rpm
RUN yum install -y libpng-devel git vim httpd mod_ssl
RUN yum install -y php php-common
RUN yum install -y composer
RUN yum --enablerepo=remi-php72 install -y php php-cli php-devel php-common php-mbstring php-mysql php-fpm php-gd php-mcrypt php-opcache php-pdo php-xml php-json php-ctype php-zip
RUN curl --silent --location https://rpm.nodesource.com/setup_8.x | bash -
RUN yum install -y nodejs
RUN systemctl enable httpd

ADD ./modernstandard.conf /etc/httpd/conf.d/modernstandard.conf

CMD ["systemctl", "start", "httpd"]
