'SET FOREIGN_KEY_CHECKS = 0;' 
ALTER TABLE t_amostras DROP fn_id_operador, CHANGE ft_id_estado ft_id_estado VARCHAR(1) DEFAULT NULL;
ALTER TABLE t_areasensaio CHANGE fn_id fn_id BIGINT AUTO_INCREMENT NOT NULL;
ALTER TABLE t_estados CHANGE ft_id ft_id VARCHAR(1) NOT NULL;
CREATE UNIQUE INDEX IX_t_estados_descricao ON t_estados (ft_descricao);
CREATE UNIQUE INDEX IX_t_estados_codigo ON t_estados (ft_codigo);
ALTER TABLE t_parametros ADD listatrabalho_id INT DEFAULT NULL;
ALTER TABLE t_parametros ADD CONSTRAINT FK_B4C3AC677D41EE03 FOREIGN KEY (listatrabalho_id) REFERENCES modelos_listas (id);
CREATE INDEX IDX_B4C3AC677D41EE03 ON t_parametros (listatrabalho_id);
ALTER TABLE t_requisicoes CHANGE fn_id fn_id BIGINT AUTO_INCREMENT NOT NULL;
ALTER TABLE t_requisicoescliente CHANGE fn_id fn_id BIGINT AUTO_INCREMENT NOT NULL;
ALTER TABLE t_responsaveiscolheita CHANGE fn_id fn_id BIGINT AUTO_INCREMENT NOT NULL;
ALTER TABLE t_resultados CHANGE fn_id fn_id BIGINT AUTO_INCREMENT NOT NULL, CHANGE ft_id_estado ft_id_estado VARCHAR(1) DEFAULT NULL, CHANGE fn_id_modeloresultado fn_id_modeloresultado BIGINT DEFAULT NULL, CHANGE fn_id_parametro fn_id_parametro BIGINT DEFAULT NULL, CHANGE fn_id_unidade fn_id_unidade BIGINT DEFAULT NULL, CHANGE ft_prefixo ft_prefixo VARCHAR(1) NOT NULL;
