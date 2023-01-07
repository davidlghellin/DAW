-- psql -h localhost -p 5432 -U postgres
create database library;
-- listar databases -> \l
-- usar libray database->\c library

create table books(
    titulo text,
    autor text
);
-- listar tablas ->\dt

insert into books values('Foundation','Issac Asimov');
