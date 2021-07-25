create table posts (
	post_id int NOT NULL AUTO_INCREMENT,
  	post_title varchar(50) NOT NULL,
  	post_desc varchar(255) NOT NULL,
  	post_img_one varchar(255) NOT NULL,
  	post_img_two varchar(255),
  	post_img_three varchar(255),
  	post_city varchar(50),
  	post_area varchar(50),
  	post_street varchar(50),
  	post_state varchar(50),
  	user_id int,
  	created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  	PRIMARY KEY (post_id),
  	FOREIGN KEY (user_id) REFERENCES users(user_id)
);
