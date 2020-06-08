FROM openjdk:8-alpine

LABEL maintainer="Dinho Zanardi <prof.dinho.ti@gmail.com>"

RUN mkdir -p /etc/springboot

ENV PROJECT_HOME /etc/springboot

WORKDIR $PROJECT_HOME

CMD ["java", "-jar", "-Dspring.profiles.active=prod" ,"./api.jar"]