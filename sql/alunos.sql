drop database if exists alunos;
create database if not exists alunos;

use alunos;

create table pessoas (
				
                id int auto_increment primary key,
                nome varchar (80),
                idade int,
                endereco varchar (100)
                

)engine = innoDB;

select * from pessoas;
select nome, idade, endereco from pessoas where id_pessoa = 1;

DELETE FROM pessoas WHERE id_pessoa =1;


