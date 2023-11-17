-- Create the database
CREATE DATABASE IF NOT EXISTS `db`;

USE `db`;

-- Create the equipes table
CREATE TABLE `equipes` (
    `IDEquipe` INT AUTO_INCREMENT PRIMARY KEY,
    `NomEquipe` VARCHAR(255),
    `DateCreation` DATETIME NOT NULL DEFAULT CURRENT_TIME
);

-- Create the personnel table
CREATE TABLE `personnel` (
    `IDPersonnel` INT AUTO_INCREMENT PRIMARY KEY,
    `Nom` VARCHAR(255),
    `Prenom` VARCHAR(255),
    `Email` VARCHAR(255),
    `Telephone` VARCHAR(15),
    `Role` VARCHAR(50),
    `IDEquipe` INT,
    `statut` VARCHAR(50),
    FOREIGN KEY (`IDEquipe`) REFERENCES `equipes`(`IDEquipe`)
);

-- Insert data into equipes table
INSERT INTO
    `equipes` (`NomEquipe')
VALUES
    ('eqp1'),
    ('eqp2'),
    ('eqp3');



INSERT INTO
    `personnel` (
        `Nom`,
        `Prenom`,
        `Email`,
        `Telephone`,
        `Role`,
        `IDEquipe`,
        `statut`
    )
VALUES
    (
        'Hounati',
        'Ahmed',
        'ahmed.hn@example.com',
        '123456789',
        'Developer',
        4,
        'Active'
    ),
    (
        'Aziz',
        'Mahedi',
        'lhindi@example.com',
        '987654321',
        'Designer',
        5,
        'Inactive'
    ),
    (
        'Bouaanani',
        'Nassim',
        'nexxas@example.com',
        '456789123',
        'analyste',
        4,
        'Inactive'
    ),
    (
        'Nouri',
        'Oussama',
        'jouana@example.com',
        '456789123',
        'Gestionnaire',
        3,
        'Active'
    ),
    (
        'Himmi',
        'Hamza',
        'btata@example.com',
        '456789123',
        'Boss',
        3,
        'Active'
    ),
    (
        'Bahlaoui',
        'Saad',
        'sissa@example.com',
        '456789123',
        'jam3ia',
        3,
        'Active'
    );