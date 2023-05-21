# CREATE DATABASE CareHour;
# USE CareHour;


CREATE TABLE admins (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    image_of_id MEDIUMBLOB NOT NULL ,
    passwordd VARCHAR(255) NOT NULL,
    time INT NOT NULL
);



CREATE TABLE doctors (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL UNIQUE,
    first_name VARCHAR(50) NOT NULL,
    middle_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    passwordd VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    phone VARCHAR(20) NOT NULL,
    image_of_id MEDIUMBLOB NOT NULL ,
    profile_image MEDIUMBLOB NOT NULL ,
    gender ENUM ('male', 'female', 'other') NOT NULL,
    dob DATE NOT NULL,
    specialty VARCHAR(255) NOT NULL,
    addresses VARCHAR(100) NOT NULL,
    education TEXT NOT NULL,
    experience_years INT NOT NULL,
    start_office_hour TIMESTAMP ,
    end_office_hour TIMESTAMP ,
    bio TEXT NOT NULL,
    time INT,
    FOREIGN KEY (user_id)
        REFERENCES admins (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
    );



CREATE TABLE patients (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    middle_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    passwordd VARCHAR(255) NOT NULL,
    image_of_id MEDIUMBLOB NOT NULL ,
    profile_image MEDIUMBLOB NOT NULL ,
    date_of_birth DATE NOT NULL,
    blood_type VARCHAR(3),
    gender ENUM ('Male', 'Female', 'Other') NOT NULL,#
    addresses VARCHAR(100),
    city VARCHAR(50),
    phone_number VARCHAR(13),
    time INT NOT NULL,
    );


CREATE TABLE patient_files (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    patient_id INT NOT NULL,
    doctor_id INT NOT NULL,
    file_name VARCHAR(100) NOT NULL,
    file_type VARCHAR(50) NOT NULL,
    documents LONGBLOB NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    time INT NOT NULL,
    FOREIGN KEY (patient_id)
        REFERENCES patients (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    FOREIGN KEY (doctor_id)
        REFERENCES doctors (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);

CREATE TABLE patient_history (
    id INT AUTO_INCREMENT PRIMARY KEY,
    files_id INT NOT NULL,
    diagnosis VARCHAR(255) NOT NULL,
    treatment VARCHAR(255) NOT NULL,
    notes TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    time INT NOT NULL,
    FOREIGN KEY (files_id)
        REFERENCES patient_files (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
    );

CREATE TABLE appointments (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    doctor_id INT NOT NULL,
    patient_id INT NOT NULL,
    appointment_date DATETIME NOT NULL,
    appointment_type ENUM ('Consultation', 'Follow-up', 'Procedure') NOT NULL,
    notes TEXT,
    time INT NOT NULL,

    FOREIGN KEY (doctor_id)
        REFERENCES doctors (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    FOREIGN KEY (patient_id)
        REFERENCES patients (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
    );



CREATE TABLE allergies (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    patient_id INT NOT NULL,
    name VARCHAR(100) NOT NULL,
    severity ENUM ('Mild', 'Moderate', 'Severe') NOT NULL,
    spicifie_allerge TEXT ,
    time INT NOT NULL,
    FOREIGN KEY (patient_id)
        REFERENCES patients (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
    );


CREATE TABLE surgeries (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    doctor_id INT NOT NULL,
    patient_id INT NOT NULL,
    surgery_name VARCHAR(100) NOT NULL,
    surgery_date DATE NOT NULL,
    notes TEXT,
    time INT NOT NULL,
    FOREIGN KEY (patient_id)
        REFERENCES patients (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    FOREIGN KEY (doctor_id)
        REFERENCES doctors (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
    );

CREATE TABLE vitals (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,

    patient_id INT NOT NULL,
    date_time DATETIME NOT NULL,
    temperature DECIMAL(5, 2) NOT NULL,
    blood_pressure VARCHAR(10) NOT NULL,
    heart_rate INT NOT NULL,
    respiratory_rate INT NOT NULL,
    time INT NOT NULL,
    FOREIGN KEY (patient_id)
        REFERENCES patients (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
    );

CREATE TABLE symptoms (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    patient_id INT NOT NULL,
    symptom_name VARCHAR(100) NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE,
    notes TEXT,
    time INT NOT NULL,
    FOREIGN KEY (patient_id)
        REFERENCES patients (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
    );

CREATE TABLE disabilities (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    patient_id INT NOT NULL,
    disability_name VARCHAR(100) NOT NULL,
    onset_date DATE NOT NULL,
    notes VARCHAR(100),
    time INT NOT NULL,
    FOREIGN KEY (patient_id)
        REFERENCES patients (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
    );


CREATE TABLE prescriptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT NOT NULL,
    doctor_id INT NOT NULL,
    medication_id INT NOT NULL,
    prescription_date DATE NOT NULL,
    dosage VARCHAR(255) NOT NULL,
    time INT NOT NULL,
    FOREIGN KEY (patient_id)
        REFERENCES patients (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    FOREIGN KEY (doctor_id)
        REFERENCES doctors (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
    );

CREATE TABLE medical_procedures (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT NOT NULL,
    doctor_id INT NOT NULL,
    procedure_date DATE NOT NULL,
    procedure_type VARCHAR(255) NOT NULL,
    procedure_notes VARCHAR(255),
    time INT NOT NULL,
    FOREIGN KEY (patient_id)
        REFERENCES patients (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    FOREIGN KEY (doctor_id)
        REFERENCES doctors (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
    );

