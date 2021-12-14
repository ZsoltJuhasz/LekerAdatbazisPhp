grant all privileges 
on leker.*
to leker@localhost
identified by 'titok';

create database leker
character set 'utf8'
collate utf8_hungarian_ci;

use leker;
create table dolgozok(
    az int,
    nev varchar(50)
);
insert into dolgozok 
values
(1,'Béla'),
(2,'Feri');