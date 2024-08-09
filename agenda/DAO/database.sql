CREATE TABLE `pessoas` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(50) NOT NULL DEFAULT '0',
	`cpf` VARCHAR(50) NOT NULL DEFAULT '0',
	`idade` INT NOT NULL DEFAULT 1,
	`apelido` VARCHAR(50) NULL DEFAULT '1',
	PRIMARY KEY (`id`),
	UNIQUE INDEX `cpf` (`cpf`)
)
COLLATE='utf8mb4_general_ci'
;

CREATE TABLE `tarefas` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`tipo_de_tarefa` VARCHAR(50) NULL DEFAULT NULL,
	`data_inicio` DATE NULL DEFAULT NULL,
	`data_conclusao` DATE NULL DEFAULT NULL,
	`pessoa_id` INT NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='utf8mb4_general_ci';
-- AddForeignKey
ALTER TABLE `tarefas`
	ADD CONSTRAINT `FK_tarefas_pessoas` FOREIGN KEY (`pessoa_id`) REFERENCES `pessoas` (`id`) ON UPDATE CASCADE ON DELETE CASCADE;


CREATE TABLE `prazos` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`hora` TIME NULL DEFAULT NULL,
	`conclusao` INT NULL DEFAULT '0',
	`tarefa_id` INT NULL DEFAULT '0',
	PRIMARY KEY (`id`),
	CONSTRAINT `FK__tarefas` FOREIGN KEY (`tarefa_id`) REFERENCES `tarefas` (`id`) ON UPDATE CASCADE ON DELETE CASCADE
)
COLLATE='utf8mb4_general_ci'
;
