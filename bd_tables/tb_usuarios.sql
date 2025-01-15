CREATE TABLE tb_usuarios(
    Numero                       INT ( 11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    Nombres                  VARCHAR (255) NULL,
    Email                    VARCHAR (255) NULL,
    Email_Verificado         VARCHAR (255) NULL,
    Password_User            VARCHAR (255) NULL,
    Tokken                   VARCHAR (255) NULL,
    fyh_creacion             DATETIME NULL,
    fyh_actualizacion        DATETIME NULL,
    fyh_eliminacion          DATETIME NULL,
    Estado                   VARCHAR (10)
);