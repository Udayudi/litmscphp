create table officers (
	officer_id int NOT NULL AUTO_INCREMENT,
  	officer_firstName varchar(50),
  	officer_lastName varchar(50),
  	department_id int,	
  	officer_email varchar(100),
  	officer_phone varchar(20),
  	officer_city varchar(50),
  	officer_username varchar(50),
  	officer_password varchar(50),	
	created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  	PRIMARY KEY (officer_id),
  	FOREIGN KEY (department_id) REFERENCES departments(department_id)
);
