CREATE DATABASE entrytest;
CREATE TABLE entrytest.university(uni_id int(3) PRIMARY KEY, uni_name varchar(255) NOT NULL);
CREATE TABLE entrytest.test(test_id int(3) PRIMARY KEY, test_name varchar(255) NOT NULL, test_uni_id int(3) NOT NULL, FOREIGN KEY(test_uni_id) REFERENCES university(uni_id));
CREATE TABLE entrytest.subject(sub_id int(3) PRIMARY KEY, sub_name varchar(255) NOT NULL, sub_test_id int(3) NOT NULL, FOREIGN KEY(sub_test_id) REFERENCES test(test_id));
CREATE TABLE entrytest.topic(topic_id int(3) PRIMARY KEY, topic_name varchar(255) NOT NULL,topic_data text ,topic_sub_id int(3) NOT NULL, FOREIGN KEY(topic_sub_id) REFERENCES subject(sub_id)); 