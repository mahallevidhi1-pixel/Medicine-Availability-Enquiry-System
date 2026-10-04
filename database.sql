CREATE DATABASE IF NOT EXISTS medicine_db;
USE medicine_db;

CREATE TABLE IF NOT EXISTS enquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_name VARCHAR(100) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    medicine_name VARCHAR(100) NOT NULL,
    dosage_mg VARCHAR(50) NOT NULL,
    quantity INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO enquiries (patient_name, phone, medicine_name, dosage_mg, quantity) 
VALUES 
('Rahul Sharma', '9876543210', 'Paracetamol', '500mg', 10),
('Priya Patel', '9876543211', 'Amoxicillin', '250mg', 15),
('Amit Verma', '9876543212', 'Cetirizine', '10mg', 5);
