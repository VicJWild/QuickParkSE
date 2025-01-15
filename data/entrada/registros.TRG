TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER generate_codigo BEFORE INSERT ON registros\nFOR EACH ROW\nBEGIN\n    SET NEW.codigo = CONCAT(NEW.id, NEW.fecha, NEW.aforo);\nEND'
sql_modes=1098907648
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_unicode_ci'
db_cl_names='utf8mb4_general_ci'
created=1732318712435635
