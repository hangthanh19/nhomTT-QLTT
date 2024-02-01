
CREATE DATABASE htql_svtt;
GO

USE htql_svtt;
GO

-- Tạo bảng students
CREATE TABLE students (
    id INT IDENTITY(1,1) PRIMARY KEY,
    mssv VARCHAR(20) NOT NULL,
    hoten VARCHAR(255) NOT NULL,
    gioitinh INT NOT NULL,
    sdt VARCHAR(10) NOT NULL,
    email VARCHAR(255) NOT NULL,
    diachi VARCHAR(255) NOT NULL,
    malop VARCHAR(20) NOT NULL,
    khoa INT NOT NULL,
    nganh VARCHAR(50) NOT NULL,
    truong VARCHAR(100) NOT NULL
);
