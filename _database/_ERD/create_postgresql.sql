/* ---------------------------------------------------------------------- */
/* Script generated with: DeZign for Databases V7.1.2                     */
/* Target DBMS:           PostgreSQL 9                                    */
/* Project file:          ERD1.0.dez                                      */
/* Project name:                                                          */
/* Author:                                                                */
/* Script type:           Database creation script                        */
/* Created on:            2012-06-18 18:05                                */
/* ---------------------------------------------------------------------- */


/* ---------------------------------------------------------------------- */
/* Tables                                                                 */
/* ---------------------------------------------------------------------- */

/* ---------------------------------------------------------------------- */
/* Add table "users"                                                      */
/* ---------------------------------------------------------------------- */

CREATE TABLE users (
    u_id SERIAL  NOT NULL,
    u_fname CHARACTER VARYING(100),
    u_mname CHARACTER VARYING(100),
    u_lname CHARACTER VARYING(100),
    u_address CHARACTER VARYING(255),
    u_bday DATE,
    isAdmin BOOLEAN,
    u_username CHARACTER VARYING(100)  NOT NULL,
    u_password CHARACTER VARYING(100)  NOT NULL,
    u_email CHARACTER VARYING(100)  NOT NULL,
    u_gender CHARACTER VARYING(40),
    u_lastlogin TIMESTAMP,
    u_dateadded TIMESTAMP,
    isactive CHARACTER(40),
    CONSTRAINT PK_users PRIMARY KEY (u_id)
);

/* ---------------------------------------------------------------------- */
/* Add table "clients"                                                    */
/* ---------------------------------------------------------------------- */

CREATE TABLE clients (
    c_id SERIAL  NOT NULL,
    c_fname CHARACTER VARYING(100),
    c_lname CHARACTER VARYING(100),
    c_mname CHARACTER VARYING(100),
    c_mobileno CHARACTER VARYING(20),
    c_telno CHARACTER VARYING(20),
    c_address CHARACTER VARYING(250),
    c_gender CHARACTER VARYING(8),
    c_email CHARACTER VARYING(100),
    c_dateadded TIMESTAMP,
    CONSTRAINT PK_clients PRIMARY KEY (c_id)
);

/* ---------------------------------------------------------------------- */
/* Add table "companies"                                                  */
/* ---------------------------------------------------------------------- */

CREATE TABLE companies (
    co_id SERIAL  NOT NULL,
    co_name CHARACTER VARYING(250),
    co_telno CHARACTER VARYING(20),
    co_mobileno CHARACTER(20),
    co_address CHARACTER VARYING(250),
    co_email CHARACTER VARYING(100),
    c_id INTEGER  NOT NULL,
    CONSTRAINT PK_companies PRIMARY KEY (co_id)
);

/* ---------------------------------------------------------------------- */
/* Add table "refers"                                                     */
/* ---------------------------------------------------------------------- */

CREATE TABLE refers (
    r_id SERIAL  NOT NULL,
    r_fname CHARACTER VARYING(100),
    r_mname CHARACTER VARYING(100),
    r_lname CHARACTER VARYING(100),
    r_mobileno CHARACTER VARYING(20),
    r_telno CHARACTER VARYING(20),
    r_email CHARACTER VARYING(100),
    r_gender CHARACTER VARYING(8),
    r_dateadded TIMESTAMP,
    CONSTRAINT PK_refers PRIMARY KEY (r_id)
);

/* ---------------------------------------------------------------------- */
/* Add table "visits"                                                     */
/* ---------------------------------------------------------------------- */

CREATE TABLE visits (
    v_id SERIAL  NOT NULL,
    r_id INTEGER  NOT NULL,
    c_id INTEGER  NOT NULL,
    u_id INTEGER  NOT NULL,
    v_date TIMESTAMP,
    PRIMARY KEY (v_id)
);

/* ---------------------------------------------------------------------- */
/* Add table "data_taken"                                                 */
/* ---------------------------------------------------------------------- */

CREATE TABLE data_taken (
    dt_id SERIAL  NOT NULL,
    dt_remarks TEXT,
    v_id INTEGER  NOT NULL,
    dt_content TEXT,
    CONSTRAINT PK_data_taken PRIMARY KEY (dt_id)
);

/* ---------------------------------------------------------------------- */
/* Add table "data_given"                                                 */
/* ---------------------------------------------------------------------- */

CREATE TABLE data_given (
    dg_id SERIAL  NOT NULL,
    dg_content TEXT,
    dg_remarks TEXT,
    v_id INTEGER  NOT NULL,
    CONSTRAINT PK_data_given PRIMARY KEY (dg_id)
);

/* ---------------------------------------------------------------------- */
/* Add table "actions"                                                    */
/* ---------------------------------------------------------------------- */

CREATE TABLE actions (
    a_id SERIAL  NOT NULL,
    a_content TEXT,
    a_remarks TEXT,
    v_id INTEGER  NOT NULL,
    a_deadline CHARACTER(40)  NOT NULL,
    CONSTRAINT PK_actions PRIMARY KEY (a_id)
);

/* ---------------------------------------------------------------------- */
/* Foreign key constraints                                                */
/* ---------------------------------------------------------------------- */

ALTER TABLE companies ADD CONSTRAINT clients_companies 
    FOREIGN KEY (c_id) REFERENCES clients (c_id);

ALTER TABLE visits ADD CONSTRAINT refers_visits 
    FOREIGN KEY (r_id) REFERENCES refers (r_id);

ALTER TABLE visits ADD CONSTRAINT clients_visits 
    FOREIGN KEY (c_id) REFERENCES clients (c_id);

ALTER TABLE visits ADD CONSTRAINT users_visits 
    FOREIGN KEY (u_id) REFERENCES users (u_id);

ALTER TABLE data_taken ADD CONSTRAINT visits_data_taken 
    FOREIGN KEY (v_id) REFERENCES visits (v_id);

ALTER TABLE data_given ADD CONSTRAINT visits_data_given 
    FOREIGN KEY (v_id) REFERENCES visits (v_id);

ALTER TABLE actions ADD CONSTRAINT visits_actions 
    FOREIGN KEY (v_id) REFERENCES visits (v_id);
