create table admins (
	admin_id int NOT NULL AUTO_INCREMENT,
  	admin_firstName varchar(50),
  	admin_lastName varchar(50),
  	admin_email varchar(100),
  	admin_city varchar(50),
  	admin_username varchar(50),
  	admin_password varchar(50),
  	created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  	PRIMARY KEY (admin_id)
); 
