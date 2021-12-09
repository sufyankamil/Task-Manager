SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
-- Database : 'task_sys_date'
----------------------------------------------------------------
-- Table structure for table 'users'
CREATE TABLE `users` (
    `id` int(30) NOT NULL,
    `firstname` varchar(200) NOT NULL,
    `lastname` varchar(200) NOT NULL,
    `username` varchar(200) NOT NULL,
    `password` varchar(400) NOT NULL,
    `email` varchar(200) NOT NULL,
) ENGINE = InnoDB DEFAULT CHARSET = utf8_general_ci;
-- Indexes for table `users`
--
ALTER TABLE `users`
ADD PRIMARY KEY (`id`);
-- AUTO_INCREMENT for table `users`
ALTER TABLE `users`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 1;
-- Dumping data for table `users`
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
--- Table structure for table 'task-list'
CREATE TABLE `task-list`
) `id` int(30) NOT NULL,
`task` varchar(200) NOT NULL,
`date` varchar(200) NOT NULL,
`description` varchar(200) NOT NULL,
`status` varchar(200) NOT NULL,
) ENGINE = InnoDB DEFAULT CHARSET = utf8_general_ci;
-- Indexes for table `task-list`
ALTER TABLE `task-list`
ADD PRIMARY KEY (`id`);
-- AUTO_INCREMENT for table `task-list`
ALTER TABLE `task-list`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 1;
---- Dumping data for table `task-list`
INSERT INTO `task-list` (
        `id`,
        `task`,
        `date`,
        `description`,
        `status`
    )
VALUES (
        1,
        'Task 1',
        '2020-01-01',
        'Task 1 description',
        'Completed',
    );
INSERT INTO `task-list` (
        `id`,
        `task`,
        `date`,
        `description`,
        `status`
    )
VALUES (
        2,
        'Task 2',
        '2020-01-01',
        'Task 2 description',
        'Completed',
    );