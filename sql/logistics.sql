CREATE DATABASE logistics;
USE logistics;

CREATE TABLE shipments (
  id INT UNSIGNED NOT NULL UNIQUE PRIMARY KEY AUTO_INCREMENT,
  sender_first_name VARCHAR(50) NOT NULL,
  sender_last_name VARCHAR(50) NOT NULL,
  consignee_first_name VARCHAR(50) NOT NULL,
  consignee_last_name VARCHAR(50) NOT NULL,
  receiving_type CHAR(1) NOT NULL,
  tracking_id CHAR(13) NOT NULL,
  date_receive TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

ALTER TABLE shipments ADD CONSTRAINT chk_receiving_type CHECK (receiving_type IN ('P', 'D'));

SELECT * FROM shipments;