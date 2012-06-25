/* ---------------------------------------------------------------------- */
/* Script generated with: DeZign for Databases V7.1.2                     */
/* Target DBMS:           PostgreSQL 9                                    */
/* Project file:          ERD1.0.dez                                      */
/* Project name:                                                          */
/* Author:                                                                */
/* Script type:           Database drop script                            */
/* Created on:            2012-06-18 18:05                                */
/* ---------------------------------------------------------------------- */


/* ---------------------------------------------------------------------- */
/* Drop foreign key constraints                                           */
/* ---------------------------------------------------------------------- */

ALTER TABLE companies DROP CONSTRAINT clients_companies;

ALTER TABLE visits DROP CONSTRAINT refers_visits;

ALTER TABLE visits DROP CONSTRAINT clients_visits;

ALTER TABLE visits DROP CONSTRAINT users_visits;

ALTER TABLE data_taken DROP CONSTRAINT visits_data_taken;

ALTER TABLE data_given DROP CONSTRAINT visits_data_given;

ALTER TABLE actions DROP CONSTRAINT visits_actions;

/* ---------------------------------------------------------------------- */
/* Drop table "actions"                                                   */
/* ---------------------------------------------------------------------- */

/* Drop constraints */

ALTER TABLE actions DROP CONSTRAINT PK_actions;

/* Drop table */

DROP TABLE actions;

/* ---------------------------------------------------------------------- */
/* Drop table "data_given"                                                */
/* ---------------------------------------------------------------------- */

/* Drop constraints */

ALTER TABLE data_given DROP CONSTRAINT PK_data_given;

/* Drop table */

DROP TABLE data_given;

/* ---------------------------------------------------------------------- */
/* Drop table "data_taken"                                                */
/* ---------------------------------------------------------------------- */

/* Drop constraints */

ALTER TABLE data_taken DROP CONSTRAINT PK_data_taken;

/* Drop table */

DROP TABLE data_taken;

/* ---------------------------------------------------------------------- */
/* Drop table "visits"                                                    */
/* ---------------------------------------------------------------------- */

/* Drop constraints */

ALTER TABLE visits DROP CONSTRAINT ;

/* Drop table */

DROP TABLE visits;

/* ---------------------------------------------------------------------- */
/* Drop table "refers"                                                    */
/* ---------------------------------------------------------------------- */

/* Drop constraints */

ALTER TABLE refers DROP CONSTRAINT PK_refers;

/* Drop table */

DROP TABLE refers;

/* ---------------------------------------------------------------------- */
/* Drop table "companies"                                                 */
/* ---------------------------------------------------------------------- */

/* Drop constraints */

ALTER TABLE companies DROP CONSTRAINT PK_companies;

/* Drop table */

DROP TABLE companies;

/* ---------------------------------------------------------------------- */
/* Drop table "clients"                                                   */
/* ---------------------------------------------------------------------- */

/* Drop constraints */

ALTER TABLE clients DROP CONSTRAINT PK_clients;

/* Drop table */

DROP TABLE clients;

/* ---------------------------------------------------------------------- */
/* Drop table "users"                                                     */
/* ---------------------------------------------------------------------- */

/* Drop constraints */

ALTER TABLE users DROP CONSTRAINT PK_users;

/* Drop table */

DROP TABLE users;
