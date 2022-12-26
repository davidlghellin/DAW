package com.scv.ejemplos.dockerbasico;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.boot.builder.SpringApplicationBuilder;
import org.springframework.boot.web.servlet.support.SpringBootServletInitializer;

@SpringBootApplication
public class DockerbasicoApplication extends SpringBootServletInitializer{


    // INI WAR
    protected SpringApplicationBuilder configure(SpringApplicationBuilder builder){
        return builder.sources(DockerbasicoApplication.class);
    }
    // FIN WAR

    public static void main(String[] args) {
        SpringApplication.run(DockerbasicoApplication.class, args);
    }

}
