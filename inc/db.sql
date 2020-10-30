create table task(
    id  AUTO_INCREMENT PRIMARY KEY,
    DESCRIPTION VARCHAR (255) NOT  NULL,
    done boolean default false,
    added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)