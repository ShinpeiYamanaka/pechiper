-- Database-Level DROP DATABASE databaseName -- 
DELETE the database (irrecoverable!) DROP DATABASE IF EXISTS databaseName -- 
DELETE if it exists CREATE DATABASE databaseName -- Create a new database CREATE DATABASE IF NOT EXISTS databaseName -- Create only if it does not exists SHOW DATABASES -- Show all the databases in this server USE databaseName -- 
   SET the default (current) database SELECT DATABASE() AS database
       -- Show the                                    AS the
       default                                        AS default
       database                                       AS database
       SHOW                                           AS show
       CREATE                                         AS create
       DATABASE                                       AS database
       databaseName                                   AS databaseName
       -- Show the                                    AS the
       CREATE                                         AS create
       DATABASE                                       AS database
       statement                                      AS statement
       -- Table-Level DROP                            AS drop
       TABLE                                          AS table
       [IF EXISTS] tableName                          AS tableName,
       ...                                                AS 
       CREATE                                         AS create
       TABLE                                          AS table
       [IF NOT EXISTS] tableName                      AS tableName
       (                                                AS 
       columnName                                     AS columnName
       columnType                                     AS columnType
       columnAttribute                                AS columnAttribute,
       ...                                                AS 
       PRIMARY                                        AS primary
       KEY(columnName)                                AS keYcolumnName,
       FOREIGN                                        AS foreign
       KEY                                            AS key
       (columnNmae)                                   AS columnNmae
       REFERENCES                                     AS references
       tableName                                      AS tableName
       (columnNmae)                                   AS columnNmae
       )                                                AS 
       SHOW                                           AS show
       TABLES                                         AS tables
       -- Show all                                    AS all
       the                                            AS the
       tables                                         AS tables
       in                                             AS in
       the                                            AS the
       default                                        AS default
       database                                       AS database
       DESCRIBE|DESC                                  AS describe|Desc
       tableName                                      AS tableName
       -- Describe the                                AS the
       details                                        AS details
       for                                            AS for
       a                                              AS a
       table                                          AS table
       ALTER                                          AS alter
       TABLE                                          AS table
       tableName                                      AS tableName
       ...                                                AS 
       -- Modify a table                              AS table,
       e.g.                                           AS g.,
       ADD                                            AS add
       COLUMN                                         AS column
       
   AND DROP COLUMN ALTER TABLE tableName ADD columnDefinition ALTER TABLE tableName DROP columnName ALTER TABLE tableName ADD FOREIGN KEY (columnNmae) REFERENCES tableName (columnNmae) ALTER TABLE tableName DROP FOREIGN KEY constraintName SHOW CREATE TABLE tableName -- Show the CREATE TABLE statement for this tableName -- Row-Level 
INSERT 
  INTO tableName 
VALUES (column1Value,
       column2Value,...) -- 
INSERT 
    ON all Columns 
INSERT 
  INTO tableName 
VALUES (column1Value,
       column2Value,...), ... -- 
INSERT multiple rows 
INSERT 
  INTO tableName (column1Name,
       ...,
       columnNName) 
VALUES (column1Value,
       ...,
       columnNValue) -- 
INSERT 
    ON selected Columns 
DELETE 
  FROM tableName 
 WHERE criteria 
UPDATE tableName 
   SET columnName = expr,
       ... 
 WHERE criteria SELECT *                              AS *
       |                                              AS |
       column1Name                                    AS alias1,
       ...                                            AS ,
       columnNName                                    AS aliasN 
  FROM tableName 
 WHERE criteria 
GROUP BY columnName 
ORDER BY columnName ASC|DESC,
       ... HAVING groupConstraints 
 LIMIT count | offset count -- Others SHOW WARNINGS; -- Show the warnings of the previous statement