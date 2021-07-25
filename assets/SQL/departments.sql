create table departments (
	department_id int NOT NULL AUTO_INCREMENT,
  	department_Name varchar(50),	
  	created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  	PRIMARY KEY (department_id) 
); 

