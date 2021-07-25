create table users ( 
	user_id int NOT NULL AUTO_INCREMENT,
    firstName varchar(50) NOT NULL,
    lastName varchar(50) NOT NULL,
    age int,
    gender varchar(255),
    phoneNumber varchar(20) NOT NULL,
    email varchar(100) NOT NULL,
    addressLineOne varchar(50) NOT NULL,
    addressLineTwo varchar(50),
    city varchar(50),
    zipcode varchar(20),
    state varchar(20),
  	username varchar(50),
  	password varchar(50),
    created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	Primary key (user_id)
);
