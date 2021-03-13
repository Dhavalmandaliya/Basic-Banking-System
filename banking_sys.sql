-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- Database: banking_sys

CREATE TABLE records (
  id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  contributor_name varchar(30) NOT NULL,
  recipient_name varchar(30) NOT NULL,
  transferred_amount int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- Creating Table structure for user_info

CREATE TABLE user_info (
  id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  firstname varchar(50) NOT NULL,
  lastname varchar(50) NOT NULL,
  email_id varchar(50) NOT NULL,
  phone_number bigint NOT NULL,
  DOB  date NOT NULL,
  account_Balance int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

