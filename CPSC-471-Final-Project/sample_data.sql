INSERT INTO communities (community_name,longitude,latitude) VALUES
('Banff Trail', 51.0738, -114.117),
('Bankview', 51.0343, -114.102),
('Kingland', 50.9873, -114.102),
('Montgomery', 51.0748,-114.163),
('Parkdale', 51.0602, -114.138),
("St. Andrew's Heights", 51.065, -114.13),
('Taradale', 51.1196, -113.939),
('West Hillhurst', 51.0569, -114.17);


INSERT INTO hospital_locations (hospital_name, longitude, latitude) VALUES
('Foothills Medical Centre', 51.0659, -114.134),
('Peter Lougheed Centre', 51.0793, -113.983),
('Rockyview General Hospital', 51.9892, -114.097),
('Sheldon M. Chumir Health Centre', 51.0413, -114.072);

INSERT INTO patients (fname,lname,email,address,password)VALUES
('Nick', 'Primomo', 'nickp@gmail.com', '91 Street NW', 'password'),
('Bob', 'Bill', 'bill1967@hotmail.com', '123 Sesame Street', 'bobpassword'),
('Nick', 'Tesla','nick1@gmail.com', 'Taradale', '123456'),
('Awab', 'Khurram','awabkhurram@gmail.com', 'Kingland', 'qwerty'),
('Oscar', 'Max','oscar@yahoo.com', 'Montgomery', 'asdfgh');

INSERT INTO doctors(fname,lname,email,address,password) VALUES
('Mikey', 'Marky', 'docemail@iamadoctor.com','999 Doctor St. NE', 'doctorpass'),
('Paul','Jackson','paul@alberta.ca','Foothills','abc123'),
('Alex','Smith','alex@alberta.ca','Peter Lougheed','efg456');

INSERT into record_table (Report_no, patient_fname, patient_lname, patient_age, patient_num, doctor_name, report_summary) VALUES
(1, 'Nick','Tesla',20,123456789,'Dr. Paul','Nick was sick so he was given medicine.'),
(2, 'Nick','Josh',20,987654321,'Dr. Paul','Nick was ill so he was given pills.'),
(3, 'Awab','Khurram',19,234567890,'Dr. Alex','Awab was tired so he was given melatonin.'),
(4,'Oscar','Max',34,345678901,'Dr. Alex','Oscar had sore legs so he was given tylenol.');