CREATE TABLE "usuario" (
	"nome_usuario" varchar(255) NOT NULL,
	"cpf_usuario" varchar(11) NOT NULL UNIQUE,
	"id_usuario" serial NOT NULL UNIQUE,
	CONSTRAINT "usuario_pk" PRIMARY KEY ("id_usuario")
) WITH (
  OIDS=FALSE
);


CREATE TABLE "produto" (
	"nome_produto" varchar(255) NOT NULL,
	"preco_produto" FLOAT NOT NULL,
	"quantidade_produto" integer NOT NULL,
	"descricao_produto" TEXT NOT NULL,
	"id_produto" serial NOT NULL,
	CONSTRAINT "produto_pk" PRIMARY KEY ("id_produto")
) WITH (
  OIDS=FALSE
);


CREATE TABLE "carrinho" (
	"quantidade_item_carrinho" integer NOT NULL,
	"id_usuario" integer NOT NULL,
	"id_produto" integer NOT NULL
) WITH (
  OIDS=FALSE
);


ALTER TABLE "carrinho" ADD CONSTRAINT "carrinho_fk0" FOREIGN KEY ("id_usuario") REFERENCES "usuario"("id_usuario");
ALTER TABLE "carrinho" ADD CONSTRAINT "carrinho_fk1" FOREIGN KEY ("id_produto") REFERENCES "produto"("id_produto");




