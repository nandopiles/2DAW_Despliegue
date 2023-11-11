-- if the table exists it will be deleted
DROP TABLE IF EXISTS `people`;
-- creates the table
CREATE TABLE IF NOT EXISTS `people` (
    `id` INT AUTO_INCREMENT,
    `name` VARCHAR(50) NOT NULL,
    `surname` VARCHAR(50) NOT NULL,
    PRIMARY KEY(`id`)
);
-- inserts data examples
INSERT INTO `people` (`name`, `surname`) VALUES ('Nando', 'Piles Lablanca');
INSERT INTO `people` (`name`, `surname`) VALUES ('Cruzi', 'Cafune');
INSERT INTO `people` (`name`, `surname`) VALUES ('Travis', 'Scott');
INSERT INTO `people` (`name`, `surname`) VALUES ('Dellaosa', 'Picaso');