# Modelagem Física do Exemplo CRUD

```sql
CREATE TABLE clientes(
    id SMALLINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(60) NOT NULL
);
```

```sql
INSERT INTO clientes (nome, email) VALUES
('Ozzy Osbourne', 'ozzy@gmail.com'),
('Ronnie James Dio', 'dio@hotmail.com');
```















