SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
-- Database : 'task_sys_date'
-- Table structure for table 'users'
CREATE TABLE `users` (
    `id` int(30) NOT NULL,
    `firstname` varchar(200) NOT NULL,
    `lastname` varchar(200) NOT NULL,
    `username` varchar(200) NOT NULL,
    `password` varchar(400) NOT NULL,
    `email` varchar(200) NOT NULL,
) ENGINE = InnoDB DEFAULT CHARSET = latin1;
-- Dumping data for table `student`
INSERT INTO `users` (
        `id`,
        `firstname`,
        `lastname`,
        `username`,
        `password`,
        `email`
    )
VALUES (
        1,
        'Sufyan',
        'Kamil',
        'sufyank',
        'jdjsbdjajkasgdkj',
        'sufyan@gmail.com',
    );