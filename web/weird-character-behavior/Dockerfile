FROM httpd:2.4.49

COPY httpd.conf /usr/local/apache2/conf/httpd.conf

COPY . /usr/local/apache2/htdocs/
RUN mv /usr/local/apache2/htdocs/flag.txt /
RUN rm /usr/local/apache2/conf/httpd.conf
RUN mv /usr/local/apache2/htdocs/httpd.conf /usr/local/apache2/conf/
