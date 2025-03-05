
DROP TABLE IF EXISTS `patients`;
CREATE TABLE Patients(
    ID INT AUTO_INCREMENT,
    fname VARCHAR(255) NOT NULL,
    lname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY(ID)    
    );

    DROP TABLE IF EXISTS `communities`;
    CREATE TABLE communities(
    community_name VARCHAR(255) NOT NULL,
    longitude float NOT NULL,
    latitude float NOT NULL,
    PRIMARY KEY(community_name)
    );

        DROP TABLE IF EXISTS `doctors`;
    CREATE TABLE Doctors(
    ID INT AUTO_INCREMENT,
    fname VARCHAR(255) NOT NULL,
    lname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY(ID)    
    );

    DROP TABLE IF EXISTS `hospital_locations`;
    CREATE TABLE hospital_locations(
    hospital_name varchar(255) NOT NULL,
    longitude float NOT NULL,
    latitude float NOT NULL,
    PRIMARY KEY(hospital_name)
    );


DROP TABLE IF EXISTS `record_table`;
CREATE TABLE `record_table`(
  `Report_no` int(11) PRIMARY KEY NOT NULL auto_increment,
  `patient_fname` varchar(255) default NULL,
  `patient_lname` varchar(255) default NULL,
  `patient_age` varchar(255) default NULL,
  `patient_num` varchar(255) default NULL,
  `doctor_name` varchar(255) default NULL,
  `report_summary` varchar(255) default NULL
) ;
