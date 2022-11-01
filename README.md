**<h1 align="center">&nbsp;<img height="50" width="80" src="https://user-images.githubusercontent.com/62439381/159171737-c6465fff-b437-4198-9c7c-ab72fa0b5a1f.gif"> Projeto CRUD em PHP - Bootstrap & MySQL <img height="50" width="80" src="https://user-images.githubusercontent.com/62439381/159171737-c6465fff-b437-4198-9c7c-ab72fa0b5a1f.gif">&nbsp;</h1>**

Desenvolvimento de um simples projeto CRUD (Sistema de uma Biblioteca) utilizando o acesso a banco de dados com o MySQL e linguagem PHP.

## Assuntos Abordados no Desenvolvimento do Projeto:

- Acesso a banco de dados com o MySql.
- Uso de linguagens, como: HTML, CSS, PHP e JavaScript.
- Uso do framework Bootstrap para realização de um layout responsivo para o projeto.

## Configuração do Projeto:

- Baixar o **XAMPP** em seu sistema operacional **https://www.apachefriends.org/pt_br/index.html**
- Instale e coloque o projeto dentro desta árvore de arquivos **_C:\XAMPP/htdocs_** (isso vai depender de onde foi instalado).
- Executar o **XAMPP** e iniciar o apache2 e mySQL.
- Executar a query **banco-de-dados.sql** ou importar o arquivo no **_phpMyAdmin_** para criar a table necessária.
<br>

```
CREATE TABLE aluno
(
  id_aluno INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_aluno VARCHAR (100) NULL,
  email_aluno VARCHAR (100) NULL,
  fone_aluno VARCHAR (20) NULL,
  rgm_aluno VARCHAR (10) NULL,
  data_nasc_aluno DATE NULL,
  genero_aluno VARCHAR (10) NULL,
  end_aluno VARCHAR (100) NULL,
  PRIMARY KEY (id_aluno)
);

 CREATE TABLE atendente
  (
  id_atendente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  biblioteca_id_biblioteca INTEGER UNSIGNED NOT NULL, 
  nome_atendente VARCHAR (100) NULL,
  PRIMARY KEY (id_atendente),
  INDEX atendente_FKIndex1 (biblioteca_id_biblioteca)
);

 CREATE TABLE biblioteca
(
  id_biblioteca INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_biblioteca VARCHAR (100) NULL,
  end_biblioteca VARCHAR (100) NULL,
  PRIMARY KEY (id_biblioteca)
);

 CREATE TABLE categoria
(
  id_categoria INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_categoria VARCHAR (45) NULL,
  PRIMARY KEY (id_categoria)
);

 CREATE TABLE livro
(
 id_livro INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  categoria_id_categoria INTEGER UNSIGNED NOT NULL,
  titulo_livro VARCHAR (100) NULL,
  autor_livro VARCHAR (100) NULL,
  editora_livro VARCHAR (45) NULL,
  edicao_livro CHAR (3) NULL,
  localidade_livro VARCHAR (20) NULL,
  ano_livro YEAR NULL,
  PRIMARY KEY (id_livro),
  INDEX livro_FKIndex1 (categoria_id_categoria)
);

 CREATE TABLE reserva
(
 aluno_id_aluno INTEGER UNSIGNED NOT NULL,
  livro_id_livro INTEGER UNSIGNED NOT NULL,
  atendente_id_atendente INTEGER UNSIGNED NOT NULL,
  data_emprestimo DATE NULL,
  data_devolucao DATE NULL,
  PRIMARY KEY (aluno_id_aluno, livro_id_livro),
  INDEX aluno_has_livro_FKIndex1 (aluno_id_aluno),
  INDEX aluno_has_livro_FKIndex2 (livro_id_livro),
  INDEX reserva_FKIndex3 (atendente_id_atendente)
);
```
## Início:

- Acesse em seu navegador e digite **http://localhost**
- Entre no arquivo do projeto.
- O sistema deverá estar rodando conforme o **_gif_** abaixo.


![localhost_projetos_projeto%20final_](https://user-images.githubusercontent.com/62439381/185649719-4e89b071-e62f-4c96-8835-44ddbe355e0e.png)


#    
