$ bash
bash-3.2$ docker exec -it tt_inlain_mysql_1 bash
/# mysql -uroot -p
mysql> CREATE USER 'user'@'127.0.0.1' IDENTIFIED WITH mysql_native_password BY 'password';
Query OK, 0 rows affected (0.10 sec)

mysql> FLUSH PRIVILEGES;

mysql> GRANT ALL PRIVILEGES ON *.* TO user@127.0.0.1 WITH GRANT OPTION;
Query OK, 0 rows affected (0.09 sec)

mysql> FLUSH PRIVILEGES;
Query OK, 0 rows affected (0.05 sec)

select user,host from user;

mysql> select * from information_schema. user_privileges;
+--------------------------------+---------------+------------------------------+--------------+
| GRANTEE                        | TABLE_CATALOG | PRIVILEGE_TYPE               | IS_GRANTABLE |
+--------------------------------+---------------+------------------------------+--------------+
| 'user'@'127.0.0.1'             | def           | SELECT                       | YES          |
| 'user'@'127.0.0.1'             | def           | INSERT                       | YES          |
| 'user'@'127.0.0.1'             | def           | UPDATE                       | YES          |
| 'user'@'127.0.0.1'             | def           | DELETE                       | YES          |
| 'user'@'127.0.0.1'             | def           | CREATE                       | YES          |
| 'user'@'127.0.0.1'             | def           | DROP                         | YES          |
| 'user'@'127.0.0.1'             | def           | RELOAD                       | YES          |
| 'user'@'127.0.0.1'             | def           | SHUTDOWN                     | YES          |
| 'user'@'127.0.0.1'             | def           | PROCESS                      | YES          |
| 'user'@'127.0.0.1'             | def           | FILE                         | YES          |
| 'user'@'127.0.0.1'             | def           | REFERENCES                   | YES          |
| 'user'@'127.0.0.1'             | def           | INDEX                        | YES          |
| 'user'@'127.0.0.1'             | def           | ALTER                        | YES          |
| 'user'@'127.0.0.1'             | def           | SHOW DATABASES               | YES          |
| 'user'@'127.0.0.1'             | def           | SUPER                        | YES          |
| 'user'@'127.0.0.1'             | def           | CREATE TEMPORARY TABLES      | YES          |
| 'user'@'127.0.0.1'             | def           | LOCK TABLES                  | YES          |
| 'user'@'127.0.0.1'             | def           | EXECUTE                      | YES          |
| 'user'@'127.0.0.1'             | def           | REPLICATION SLAVE            | YES          |
| 'user'@'127.0.0.1'             | def           | REPLICATION CLIENT           | YES          |
| 'user'@'127.0.0.1'             | def           | CREATE VIEW                  | YES          |
| 'user'@'127.0.0.1'             | def           | SHOW VIEW                    | YES          |
| 'user'@'127.0.0.1'             | def           | CREATE ROUTINE               | YES          |
| 'user'@'127.0.0.1'             | def           | ALTER ROUTINE                | YES          |
| 'user'@'127.0.0.1'             | def           | CREATE USER                  | YES          |
| 'user'@'127.0.0.1'             | def           | EVENT                        | YES          |
| 'user'@'127.0.0.1'             | def           | TRIGGER                      | YES          |
| 'user'@'127.0.0.1'             | def           | CREATE TABLESPACE            | YES          |
| 'user'@'127.0.0.1'             | def           | CREATE ROLE                  | YES          |
| 'user'@'127.0.0.1'             | def           | DROP ROLE                    | YES          |
| 'user'@'127.0.0.1'             | def           | XA_RECOVER_ADMIN             | YES          |
| 'user'@'127.0.0.1'             | def           | TABLE_ENCRYPTION_ADMIN       | YES          |
| 'user'@'127.0.0.1'             | def           | SYSTEM_VARIABLES_ADMIN       | YES          |
| 'user'@'127.0.0.1'             | def           | SYSTEM_USER                  | YES          |
| 'user'@'127.0.0.1'             | def           | SHOW_ROUTINE                 | YES          |
| 'user'@'127.0.0.1'             | def           | SET_USER_ID                  | YES          |
| 'user'@'127.0.0.1'             | def           | SESSION_VARIABLES_ADMIN      | YES          |
| 'user'@'127.0.0.1'             | def           | SERVICE_CONNECTION_ADMIN     | YES          |
| 'user'@'127.0.0.1'             | def           | SENSITIVE_VARIABLES_OBSERVER | YES          |
| 'user'@'127.0.0.1'             | def           | ROLE_ADMIN                   | YES          |
| 'user'@'127.0.0.1'             | def           | RESOURCE_GROUP_USER          | YES          |
| 'user'@'127.0.0.1'             | def           | RESOURCE_GROUP_ADMIN         | YES          |
| 'user'@'127.0.0.1'             | def           | REPLICATION_SLAVE_ADMIN      | YES          |
| 'user'@'127.0.0.1'             | def           | REPLICATION_APPLIER          | YES          |
| 'user'@'127.0.0.1'             | def           | PERSIST_RO_VARIABLES_ADMIN   | YES          |
| 'user'@'127.0.0.1'             | def           | PASSWORDLESS_USER_ADMIN      | YES          |
| 'user'@'127.0.0.1'             | def           | INNODB_REDO_LOG_ENABLE       | YES          |
| 'user'@'127.0.0.1'             | def           | INNODB_REDO_LOG_ARCHIVE      | YES          |
| 'user'@'127.0.0.1'             | def           | GROUP_REPLICATION_STREAM     | YES          |
| 'user'@'127.0.0.1'             | def           | GROUP_REPLICATION_ADMIN      | YES          |
| 'user'@'127.0.0.1'             | def           | FLUSH_USER_RESOURCES         | YES          |
| 'user'@'127.0.0.1'             | def           | FLUSH_TABLES                 | YES          |
| 'user'@'127.0.0.1'             | def           | FLUSH_STATUS                 | YES          |
| 'user'@'127.0.0.1'             | def           | FLUSH_OPTIMIZER_COSTS        | YES          |
| 'user'@'127.0.0.1'             | def           | ENCRYPTION_KEY_ADMIN         | YES          |
| 'user'@'127.0.0.1'             | def           | CONNECTION_ADMIN             | YES          |
| 'user'@'127.0.0.1'             | def           | CLONE_ADMIN                  | YES          |
| 'user'@'127.0.0.1'             | def           | BINLOG_ENCRYPTION_ADMIN      | YES          |
| 'user'@'127.0.0.1'             | def           | BINLOG_ADMIN                 | YES          |
| 'user'@'127.0.0.1'             | def           | BACKUP_ADMIN                 | YES          |
| 'user'@'127.0.0.1'             | def           | AUTHENTICATION_POLICY_ADMIN  | YES          |
| 'user'@'127.0.0.1'             | def           | AUDIT_ADMIN                  | YES          |
| 'user'@'127.0.0.1'             | def           | AUDIT_ABORT_EXEMPT           | YES          |
| 'user'@'127.0.0.1'             | def           | APPLICATION_PASSWORD_ADMIN   | YES          |



