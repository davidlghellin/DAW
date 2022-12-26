FROM tomcat:9.0.39-jdk8-openjdk-slim-buster
# FROM tomcat:9.0.33-alpine # más pequeño el docker pero no he encontrado la 39

ADD dockerbasico.war /usr/local/tomcat/webapps/

EXPOSE 8080

CMD ["catalina.sh", "run"]

